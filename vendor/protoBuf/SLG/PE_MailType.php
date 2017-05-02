<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PE_MailType enum
 */
final class PE_MailType
{
    const PE_MT_Info = 1;
    const PE_MT_League = 2;
    const PE_MT_Battle = 3;
    const PE_MT_System = 4;
    const PE_MT_Report = 5;
    const PE_MT_Collection = 6;
    const PE_MT_Farm = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PE_MT_Info' => self::PE_MT_Info,
            'PE_MT_League' => self::PE_MT_League,
            'PE_MT_Battle' => self::PE_MT_Battle,
            'PE_MT_System' => self::PE_MT_System,
            'PE_MT_Report' => self::PE_MT_Report,
            'PE_MT_Collection' => self::PE_MT_Collection,
            'PE_MT_Farm' => self::PE_MT_Farm,
        );
    }
}
}