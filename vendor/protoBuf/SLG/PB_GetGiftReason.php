<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GetGiftReason enum
 */
final class PB_GetGiftReason
{
    const GetGiftByOpenCardPackage = 1;
    const GetGiftByCombatFinish = 2;
    const GetGiftByAchieveFinish = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'GetGiftByOpenCardPackage' => self::GetGiftByOpenCardPackage,
            'GetGiftByCombatFinish' => self::GetGiftByCombatFinish,
            'GetGiftByAchieveFinish' => self::GetGiftByAchieveFinish,
        );
    }
}
}