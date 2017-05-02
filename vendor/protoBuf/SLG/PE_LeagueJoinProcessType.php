<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PE_LeagueJoinProcessType enum
 */
final class PE_LeagueJoinProcessType
{
    const PE_LJPT_Accept = 1;
    const PE_LJPT_Refuse = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PE_LJPT_Accept' => self::PE_LJPT_Accept,
            'PE_LJPT_Refuse' => self::PE_LJPT_Refuse,
        );
    }
}
}