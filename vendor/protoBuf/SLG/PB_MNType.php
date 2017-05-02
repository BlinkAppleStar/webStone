<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_MNType enum
 */
final class PB_MNType
{
    const MNGamer = 1;
    const MNMonster = 2;
    const MNRes = 3;
    const MNTerrain = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MNGamer' => self::MNGamer,
            'MNMonster' => self::MNMonster,
            'MNRes' => self::MNRes,
            'MNTerrain' => self::MNTerrain,
        );
    }
}
}