<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_PVPType enum
 */
final class PB_PVPType
{
    const PVPTypeCancel = 0;
    const PVPTYpeAddMember = 1;
    const PVPType1V1 = 100;
    const PVPTypeInvite1V1 = 101;
    const PVPTypeBeInvited1v1 = 102;
    const PVPType2V2 = 103;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PVPTypeCancel' => self::PVPTypeCancel,
            'PVPTYpeAddMember' => self::PVPTYpeAddMember,
            'PVPType1V1' => self::PVPType1V1,
            'PVPTypeInvite1V1' => self::PVPTypeInvite1V1,
            'PVPTypeBeInvited1v1' => self::PVPTypeBeInvited1v1,
            'PVPType2V2' => self::PVPType2V2,
        );
    }
}
}