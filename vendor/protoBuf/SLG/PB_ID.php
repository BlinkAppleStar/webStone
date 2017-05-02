<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ID enum
 */
final class PB_ID
{
    const IDMoney = 90000001;
    const IDRmb = 90000002;
    const IDExp = 91000001;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'IDMoney' => self::IDMoney,
            'IDRmb' => self::IDRmb,
            'IDExp' => self::IDExp,
        );
    }
}
}