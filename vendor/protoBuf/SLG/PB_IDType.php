<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_IDType enum
 */
final class PB_IDType
{
    const IDTypeBuild = 10;
    const TDTypeSoldier = 11;
    const IDTypeMap = 12;
    const IDTypeMonster = 13;
    const IDTypeCard = 15;
    const IDTypeAchieve = 20;
    const IDTypeProp = 30;
    const IDTypeRes = 31;
    const IDTypePackage = 60;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'IDTypeBuild' => self::IDTypeBuild,
            'TDTypeSoldier' => self::TDTypeSoldier,
            'IDTypeMap' => self::IDTypeMap,
            'IDTypeMonster' => self::IDTypeMonster,
            'IDTypeCard' => self::IDTypeCard,
            'IDTypeAchieve' => self::IDTypeAchieve,
            'IDTypeProp' => self::IDTypeProp,
            'IDTypeRes' => self::IDTypeRes,
            'IDTypePackage' => self::IDTypePackage,
        );
    }
}
}