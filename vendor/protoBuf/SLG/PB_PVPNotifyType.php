<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_PVPNotifyType enum
 */
final class PB_PVPNotifyType
{
    const PVPNotifyTypeDisconnect = 1;
    const PVPNotifyTypeReLogin = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PVPNotifyTypeDisconnect' => self::PVPNotifyTypeDisconnect,
            'PVPNotifyTypeReLogin' => self::PVPNotifyTypeReLogin,
        );
    }
}
}