<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PE_SystemEventType enum
 */
final class PE_SystemEventType
{
    const PE_SET_CreateLeague = 1;
    const PE_SET_DismissLeague = 2;
    const PE_SET_TransferLeague = 3;
    const PE_SET_JoinLeague = 4;
    const PE_SET_QuitLeague = 5;
    const PE_SET_LeagueRemoveMember = 6;
    const PE_SET_UpdateLeagueInfo = 7;
    const PE_SET_UpdateMemberInfo = 8;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PE_SET_CreateLeague' => self::PE_SET_CreateLeague,
            'PE_SET_DismissLeague' => self::PE_SET_DismissLeague,
            'PE_SET_TransferLeague' => self::PE_SET_TransferLeague,
            'PE_SET_JoinLeague' => self::PE_SET_JoinLeague,
            'PE_SET_QuitLeague' => self::PE_SET_QuitLeague,
            'PE_SET_LeagueRemoveMember' => self::PE_SET_LeagueRemoveMember,
            'PE_SET_UpdateLeagueInfo' => self::PE_SET_UpdateLeagueInfo,
            'PE_SET_UpdateMemberInfo' => self::PE_SET_UpdateMemberInfo,
        );
    }
}
}