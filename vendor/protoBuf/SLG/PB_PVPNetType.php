<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_PVPNetType enum
 */
final class PB_PVPNetType
{
    const PVPNetTypeTcp = 1;
    const PVPNetTypeUdp = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PVPNetTypeTcp' => self::PVPNetTypeTcp,
            'PVPNetTypeUdp' => self::PVPNetTypeUdp,
        );
    }
}
}