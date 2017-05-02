<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PE_LeagueAddMode enum
 */
final class PE_LeagueAddMode
{
    const PE_LAM_Verify = 1;
    const PE_LAM_NonVerify = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PE_LAM_Verify' => self::PE_LAM_Verify,
            'PE_LAM_NonVerify' => self::PE_LAM_NonVerify,
        );
    }
}
}