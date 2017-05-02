<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_PVPState enum
 */
final class PB_PVPState
{
    const PVPStateStart = 1;
    const PVPStateSync = 2;
    const PVPStateEnd = 3;
    const PVPStateLoading = 4;
    const PVPStateReLogin = 5;
    const PVPStateReady = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PVPStateStart' => self::PVPStateStart,
            'PVPStateSync' => self::PVPStateSync,
            'PVPStateEnd' => self::PVPStateEnd,
            'PVPStateLoading' => self::PVPStateLoading,
            'PVPStateReLogin' => self::PVPStateReLogin,
            'PVPStateReady' => self::PVPStateReady,
        );
    }
}
}