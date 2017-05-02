<?php
/**
 * Auto generated from SOE.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_SOE_CAMP enum
 */
final class PB_SOE_CAMP
{
    const SOE_CAMP_GAIA = 1;
    const SOE_CAMP_EDEN = 2;
    const SOE_CAMP_GAIA_NEUTRAL = 3;
    const SOE_CAMP_EDEN_NEUTRAL = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'SOE_CAMP_GAIA' => self::SOE_CAMP_GAIA,
            'SOE_CAMP_EDEN' => self::SOE_CAMP_EDEN,
            'SOE_CAMP_GAIA_NEUTRAL' => self::SOE_CAMP_GAIA_NEUTRAL,
            'SOE_CAMP_EDEN_NEUTRAL' => self::SOE_CAMP_EDEN_NEUTRAL,
        );
    }
}
}