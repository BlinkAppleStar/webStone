<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PE_MailSenderType enum
 */
final class PE_MailSenderType
{
    const PE_MST_System = 1;
    const PE_MST_Gamer = 2;
    const PE_MST_League = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PE_MST_System' => self::PE_MST_System,
            'PE_MST_Gamer' => self::PE_MST_Gamer,
            'PE_MST_League' => self::PE_MST_League,
        );
    }
}
}