<?php

declare(strict_types=1);

namespace longlang\phpkafka\Test\Protocol;

use longlang\phpkafka\Protocol\ApiKeys;
use longlang\phpkafka\Protocol\AbstractStruct;
use PHPUnit\Framework\TestCase;

/**
 * Verifies pack/unpack symmetry for every protocol class.
 *
 * This test does not need a Kafka broker — it constructs a default
 * instance, packs it at a given version, unpacks the result, and
 * asserts the round-trip succeeds without error. It guards against
 * regressions in the generator and AbstractStruct runtime.
 */
class RoundTripTest extends TestCase
{
    /**
     * @dataProvider provideProtocolClasses
     */
    public function testRoundTrip(string $className): void
    {
        $obj = new $className();
        $maxVer = $this->getMaxVersion($obj);

        // Test at v0 and max version (the two boundary cases most likely
        // to expose version-gating bugs in field selection).
        foreach ([0, $maxVer] as $version) {
            if ($version < 0) {
                continue;
            }
            $packed = $obj->pack($version);
            $this->assertIsString($packed);

            $parsed = new $className();
            $parsed->unpack($packed, $size, $version);
            $this->assertEquals(strlen($packed), $size);
        }
    }

    /**
     * Tests that setting values on a few key protocols survives a round-trip
     * with data integrity preserved (not just structural symmetry).
     *
     * @dataProvider provideDataIntegrityCases
     */
    public function testDataIntegrityRoundTrip(string $className, array $values, int $version, array $assertKeys): void
    {
        $obj = new $className();
        foreach ($values as $setter => $value) {
            $obj->$setter($value);
        }
        $packed = $obj->pack($version);

        $parsed = new $className();
        $parsed->unpack($packed, $size, $version);

        foreach ($assertKeys as $getter => $expected) {
            $this->assertEquals($expected, $parsed->$getter(), "Data integrity failed for $className::$getter");
        }
    }

    public function provideProtocolClasses(): array
    {
        $map = (new \ReflectionClass(ApiKeys::class))->getConstant('PROTOCOL_MAP');
        $map[0] = 'Produce'; // key 0 sometimes missing from map
        ksort($map);

        $cases = [];
        foreach ($map as $apiKey => $apiName) {
            foreach (['Request', 'Response'] as $suffix) {
                $cls = "longlang\\phpkafka\\Protocol\\$apiName\\$apiName$suffix";
                if (class_exists($cls) && is_subclass_of($cls, AbstractStruct::class)) {
                    $cases["$apiName$suffix"] = [$cls];
                }
            }
        }

        return $cases;
    }

    public function provideDataIntegrityCases(): array
    {
        return [
            // Core protocols upgraded in this fork
            'ProduceResponse v8' => [
                'longlang\phpkafka\Protocol\Produce\ProduceResponse',
                ['setThrottleTimeMs' => 77],
                8,
                ['getThrottleTimeMs' => 77],
            ],
            'ListOffsetsResponse v5' => [
                'longlang\phpkafka\Protocol\ListOffsets\ListOffsetsResponse',
                ['setThrottleTimeMs' => 33],
                5,
                ['getThrottleTimeMs' => 33],
            ],
            // New protocols added by the upgrade
            'ConsumerGroupHeartbeatResponse v0' => [
                'longlang\phpkafka\Protocol\ConsumerGroupHeartbeat\ConsumerGroupHeartbeatResponse',
                ['setMemberId' => 'consumer-1', 'setMemberEpoch' => 42, 'setHeartbeatIntervalMs' => 3000],
                0,
                ['getMemberId' => 'consumer-1', 'getMemberEpoch' => 42, 'getHeartbeatIntervalMs' => 3000],
            ],
            'ShareGroupHeartbeatResponse v0' => [
                'longlang\phpkafka\Protocol\ShareGroupHeartbeat\ShareGroupHeartbeatResponse',
                ['setMemberId' => 'share-1', 'setMemberEpoch' => 7],
                0,
                ['getMemberId' => 'share-1', 'getMemberEpoch' => 7],
            ],
            'GetTelemetrySubscriptionsResponse v0' => [
                'longlang\phpkafka\Protocol\GetTelemetrySubscriptions\GetTelemetrySubscriptionsResponse',
                ['setSubscriptionId' => 99, 'setErrorCode' => 0],
                0,
                ['getSubscriptionId' => 99, 'getErrorCode' => 0],
            ],
            'AllocateProducerIdsResponse v0' => [
                'longlang\phpkafka\Protocol\AllocateProducerIds\AllocateProducerIdsResponse',
                ['setProducerIdStart' => 1001, 'setProducerIdLen' => 5],
                0,
                ['getProducerIdStart' => 1001, 'getProducerIdLen' => 5],
            ],
        ];
    }

    private function getMaxVersion(AbstractStruct $obj): int
    {
        if (method_exists($obj, 'getMaxSupportedVersion')) {
            return $obj->getMaxSupportedVersion();
        }

        return 0;
    }
}
