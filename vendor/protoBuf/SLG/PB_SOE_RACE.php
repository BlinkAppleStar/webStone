<?php
/**
 * Auto generated from SOE.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_SOE_RACE enum
 */
final class PB_SOE_RACE
{
    const SOE_RACE_HUMAN = 1;
    const SOE_RACE_ROBOT = 2;
    const SOE_RACE_ALIEN = 3;
    const SOE_RACE_BEAST = 5;
    const SOE_RACE_EMPIRE = 6;
    const SOE_RACE_ARK = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'SOE_RACE_HUMAN' => self::SOE_RACE_HUMAN,
            'SOE_RACE_ROBOT' => self::SOE_RACE_ROBOT,
            'SOE_RACE_ALIEN' => self::SOE_RACE_ALIEN,
            'SOE_RACE_BEAST' => self::SOE_RACE_BEAST,
            'SOE_RACE_EMPIRE' => self::SOE_RACE_EMPIRE,
            'SOE_RACE_ARK' => self::SOE_RACE_ARK,
        );
    }
}
}