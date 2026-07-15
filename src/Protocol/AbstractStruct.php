<?php

declare(strict_types=1);

namespace longlang\phpkafka\Protocol;

use longlang\phpkafka\Protocol\Type\AbstractType;
use longlang\phpkafka\Protocol\Type\ArrayInt32;
use longlang\phpkafka\Protocol\Type\CompactArray;
use longlang\phpkafka\Protocol\Type\TypeRelation;
use longlang\phpkafka\Protocol\Type\UVarInt;

abstract class AbstractStruct implements \JsonSerializable
{
    /**
     * Protocol fields map.
     *
     * @var ProtocolField[][]
     */
    protected static $maps = [];

    /**
     * tagged fieldses.
     *
     * @var ProtocolField[][]
     */
    protected static $taggedFieldses = [];

    public function pack(int $apiVersion = 0): string
    {
        $parsedfieldsNames = [];
        $result = '';
        $taggedResult = '';
        $hasTagged = false;
        $taggedCount = 0;
        $flexibleVersions = $this->getFlexibleVersions();
        foreach (array_merge(self::$maps[static::class], ['|'], self::$taggedFieldses[static::class]) as $protocolField) {
            if ('|' === $protocolField) {
                if (!\in_array($apiVersion, $flexibleVersions)) {
                    break;
                }
                $hasTagged = true;
                continue;
            }

            /** @var ProtocolField $protocolField */
            if ($hasTagged && !\in_array($apiVersion, $protocolField->getTaggedVersions())) {
                continue;
            }
            // version
            if (!\in_array($apiVersion, $protocolField->getVersions())) {
                continue;
            }
            $fieldName = $protocolField->getName();
            if (isset($parsedfieldsNames[$fieldName])) {
                continue;
            }
            $parsedfieldsNames[$fieldName] = 1;
            $value = $this->$fieldName;
            if ($hasTagged && null === $value) {
                continue;
            }
            if ($value instanceof self) {
                $item = $value->pack($apiVersion);
            } else {
                $type = $this->getType($apiVersion, $protocolField);
                if ($protocolField->getIsArray()) {
                    $arrayType = $this->getArrayType($apiVersion, $protocolField);
                    $item = $arrayType::pack($value, $type, $apiVersion);
                } elseif (is_subclass_of($type, AbstractType::class)) {
                    // A non-nullable field left as null (common when a struct is
                    // freshly created and only some fields are set) gets a type
                    // appropriate zero value. This mirrors the Java client's
                    // treatment of ignorable fields and keeps pack/unpack symmetric.
                    if (null === $value) {
                        $value = $this->defaultValueForType($type);
                    }
                    $item = $type::pack($value);
                } elseif (is_subclass_of($type, self::class)) {
                    // Struct field left as null: instantiate an empty struct so pack
                    // stays symmetric with unpack (which always news up a struct).
                    $value = new $type();
                    $this->$fieldName = $value;
                    $item = $value->pack($apiVersion);
                } else {
                    throw new \InvalidArgumentException(sprintf('Invalid type %s', $protocolField->getTypeForDisplay()));
                }
            }
            if ($hasTagged) {
                $item = UVarInt::pack($protocolField->getTag()) . UVarInt::pack(\strlen($item)) . $item;
                $taggedResult .= $item;
                ++$taggedCount;
            } else {
                $result .= $item;
            }
        }

        if (\in_array($apiVersion, $flexibleVersions)) {
            return $result . UVarInt::pack($taggedCount) . $taggedResult;
        } else {
            return $result;
        }
    }

    public function unpack(string $data, ?int & $size = null, int $apiVersion = 0): void
    {
        $parsedfieldsNames = [];
        $size = $tmpSize = 0;
        foreach (self::$maps[static::class] as $protocolField) {
            if (!\in_array($apiVersion, $protocolField->getVersions())) {
                continue;
            }
            $fieldName = $protocolField->getName();
            if (isset($parsedfieldsNames[$fieldName])) {
                continue;
            }
            $parsedfieldsNames[$fieldName] = 1;
            $this->$fieldName = $this->unpackItem($apiVersion, $data, $protocolField, $tmpSize);
            $data = substr($data, $tmpSize);
            $size += $tmpSize;
        }
        if (\in_array($apiVersion, $this->getFlexibleVersions())) {
            $taggedFieldsCount = UVarInt::unpack($data, $tmpSize);
            $data = substr($data, $tmpSize);
            $size += $tmpSize;
            for ($i = 0; $i < $taggedFieldsCount; ++$i) {
                $tag = UVarInt::unpack($data, $tmpSize);
                $data = substr($data, $tmpSize);
                $size += $tmpSize;
                $length = UVarInt::unpack($data, $tmpSize);
                $data = substr($data, $tmpSize);
                $size += $tmpSize + $length;
                $dataBuffer = substr($data, 0, $length);
                $data = substr($data, $length);
                if (!isset(static::$taggedFieldses[static::class][$tag])) {
                    continue;
                }
                $protocolField = static::$taggedFieldses[static::class][$tag];
                $fieldName = $protocolField->getName();
                $this->$fieldName = $this->unpackItem($apiVersion, $dataBuffer, $protocolField, $tmpSize);
            }
        }
    }

    /**
     * @return mixed
     */
    protected function unpackItem(int $apiVersion, string $data, ProtocolField $protocolField, ?int & $tmpSize)
    {
        $type = $protocolField->getType();
        if ($protocolField->getIsArray()) {
            $arrayType = $this->getArrayType($apiVersion, $protocolField);
            $type = $this->getType($apiVersion, $protocolField);
            $value = $arrayType::unpack($data, $tmpSize, $type, $apiVersion);
            if (null === $value && !$protocolField->getNullableVersions()) {
                $value = [];
            }
        } else {
            $type = $this->getType($apiVersion, $protocolField);
            if (is_subclass_of($type, AbstractType::class)) {
                $value = $type::unpack($data, $tmpSize);
            } else {
                if (!class_exists($type)) {
                    throw new \InvalidArgumentException(sprintf('Invalid type %s', $protocolField->getTypeForDisplay()));
                }
                if (!is_subclass_of($type, self::class)) {
                    throw new \InvalidArgumentException(sprintf('Invalid type %s', $type));
                }
                /** @var self $value */
                $value = new $type();
                $value->unpack($data, $tmpSize);
            }
        }

        return $value;
    }

    public function toArray(): array
    {
        $parsedfieldsNames = [];
        $result = [];
        foreach (array_merge(self::$maps[static::class], self::$taggedFieldses[static::class]) as $protocolField) {
            /** @var ProtocolField $protocolField */
            $fieldName = $protocolField->getName();
            if (isset($parsedfieldsNames[$fieldName])) {
                continue;
            }
            $parsedfieldsNames[$fieldName] = 1;
            $value = $this->$fieldName;
            if ($value instanceof self) {
                $value = $value->toArray();
            } elseif ($protocolField->getIsArray()) {
                $array = [];
                if ($value) {
                    foreach ($value as $item) {
                        if ($item instanceof self) {
                            $array[] = $item->toArray();
                        } else {
                            $array[] = $item;
                        }
                    }
                }
                $value = $array;
            }
            $result[$fieldName] = $value;
        }

        return $result;
    }

    public function getFlexibleVersions(): array
    {
        return [];
    }

    /**
     * json 序列化.
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    protected function getArrayType(int $apiVersion, ProtocolField $protocolField): string
    {
        if (\in_array($apiVersion, $protocolField->getFlexibleVersions())) {
            return CompactArray::class;
        } else {
            return ArrayInt32::class;
        }
    }

    protected function getType(int $apiVersion, ProtocolField $protocolField): string
    {
        $type = $protocolField->getType();
        if (class_exists($type)) {
            return $type;
        }

        $flexible = \in_array($apiVersion, $protocolField->getFlexibleVersions());
        $nullable = \in_array($apiVersion, $protocolField->getNullableVersions());

        if ($flexible) {
            if ($nullable) {
                $index = TypeRelation::INDEX_COMPACT_NULLABLE_TYPE;
            } else {
                $index = TypeRelation::INDEX_COMPACT_TYPE;
            }
        } elseif ($nullable) {
            $index = TypeRelation::INDEX_NULLABLE_TYPE;
        } else {
            $index = TypeRelation::INDEX_UNCOMPACT_TYPE;
        }

        if (!isset(TypeRelation::TYPE_RELATION[$type][$index])) {
            throw new \InvalidArgumentException(sprintf('Invalid type %s', $type));
        }

        $resolved = TypeRelation::TYPE_RELATION[$type][$index];
        // Values that are already fully-qualified class names (e.g. RecordBatch
        // mapped via the 'records' / 'RecordBatch' type) start with a backslash
        // and must not be re-prefixed with the Type namespace.
        if (str_starts_with($resolved, '\\')) {
            return $resolved;
        }

        return '\longlang\phpkafka\Protocol\Type\\' . $resolved;
    }

    /**
     * Returns a type-appropriate zero value for a non-nullable field that was
     * left as null. Used during pack to keep symmetry with unpack.
     *
     * @return mixed
     */
    private function defaultValueForType(string $typeClass)
    {
        // Map the concrete Type class back to its PHP zero value.
        static $phpTypeMap = [
            'Boolean' => false, 'Int8' => 0, 'Int16' => 0, 'Int32' => 0,
            'Int64' => 0, 'UInt16' => 0, 'Float64' => 0.0,
            'String16' => '', 'CompactString' => '', 'NullableString' => '',
            'String32' => '', 'NullableString32' => '', 'CompactNullableString' => '',
            'CompactNullableString' => '', 'Uuid' => '',
            'varint' => 0, 'UVarInt' => 0,
        ];
        $shortName = substr(strrchr($typeClass, '\\'), 1) ?: $typeClass;

        return $phpTypeMap[$shortName] ?? '';
    }
}
