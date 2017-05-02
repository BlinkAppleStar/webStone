<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PE_LeagueTempleRankingType enum
 */
final class PE_LeagueTempleRankingType
{
    const PE_LTRT_Day = 1;
    const PE_LTRT_Week = 2;
    const PE_LTRT_Total = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PE_LTRT_Day' => self::PE_LTRT_Day,
            'PE_LTRT_Week' => self::PE_LTRT_Week,
            'PE_LTRT_Total' => self::PE_LTRT_Total,
        );
    }
}
}