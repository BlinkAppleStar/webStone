<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_BuildState enum
 */
final class PB_BuildState
{
    const BuildState_NotBuilt = 0;
    const BuildState_Building = 1;
    const BuildState_Lock = 2;
    const BuildState_Idle = 3;
    const BuildState_Upgrade = 4;
    const BuildState_Busy = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'BuildState_NotBuilt' => self::BuildState_NotBuilt,
            'BuildState_Building' => self::BuildState_Building,
            'BuildState_Lock' => self::BuildState_Lock,
            'BuildState_Idle' => self::BuildState_Idle,
            'BuildState_Upgrade' => self::BuildState_Upgrade,
            'BuildState_Busy' => self::BuildState_Busy,
        );
    }
}
}