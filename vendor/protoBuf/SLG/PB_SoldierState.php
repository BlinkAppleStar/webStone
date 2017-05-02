<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_SoldierState enum
 */
final class PB_SoldierState
{
    const SoldierStateIdle = 1;
    const SoldierStateMoveto = 2;
    const SoldierStateDie = 3;
    const SoldierStateAttack = 4;
    const SoldierStateHurt = 5;
    const SoldierStateAni = 6;
    const SoldierStateUI = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'SoldierStateIdle' => self::SoldierStateIdle,
            'SoldierStateMoveto' => self::SoldierStateMoveto,
            'SoldierStateDie' => self::SoldierStateDie,
            'SoldierStateAttack' => self::SoldierStateAttack,
            'SoldierStateHurt' => self::SoldierStateHurt,
            'SoldierStateAni' => self::SoldierStateAni,
            'SoldierStateUI' => self::SoldierStateUI,
        );
    }
}
}