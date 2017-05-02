<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PE_LeagueLocateType enum
 */
final class PE_LeagueLocateType
{
    const PE_LLT_Battle = 1;
    const PE_LLT_Friend = 2;
    const PE_LLT_Neutral = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PE_LLT_Battle' => self::PE_LLT_Battle,
            'PE_LLT_Friend' => self::PE_LLT_Friend,
            'PE_LLT_Neutral' => self::PE_LLT_Neutral,
        );
    }
}
}