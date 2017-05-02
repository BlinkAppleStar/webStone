<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ResId enum
 */
final class PB_ResId
{
    const ResIdGold = 31000001;
    const ResIdWood = 31000002;
    const ResIdUnknown1 = 31000003;
    const ResIdUnknown2 = 31000004;
    const ResIdUnknown3 = 31000005;
    const ResIdUnknown4 = 31000006;
    const ResIdCuprum = 31000007;
    const ResIdMithril = 31000008;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'ResIdGold' => self::ResIdGold,
            'ResIdWood' => self::ResIdWood,
            'ResIdUnknown1' => self::ResIdUnknown1,
            'ResIdUnknown2' => self::ResIdUnknown2,
            'ResIdUnknown3' => self::ResIdUnknown3,
            'ResIdUnknown4' => self::ResIdUnknown4,
            'ResIdCuprum' => self::ResIdCuprum,
            'ResIdMithril' => self::ResIdMithril,
        );
    }
}
}