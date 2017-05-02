<?php
/**
 * Auto generated from GamerFriends.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_FriReqResult enum
 */
final class PB_FriReqResult
{
    const FriReqResultOK = 1;
    const FriReqResultDeny = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'FriReqResultOK' => self::FriReqResultOK,
            'FriReqResultDeny' => self::FriReqResultDeny,
        );
    }
}
}