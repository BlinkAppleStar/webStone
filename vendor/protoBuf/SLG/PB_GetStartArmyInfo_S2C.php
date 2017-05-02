<?php
/**
 * Auto generated from Map.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GetStartArmyInfo_S2C message
 */
class PB_GetStartArmyInfo_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const MAX_COMBAT_SOLDIER = 1;
    const STAMINA = 2;
    const STAMINA_TIME = 3;
    const LEAGUE_MONSTER_TIMES = 4;
    const FORWARD_TIME = 5;
    const GETRES_SPEED = 6;
    const RES_COUNT = 7;
    const CUR_GAMER = 8;
    const MAX_GAMER = 9;
    const CUR_SOLDIER = 10;
    const MAX_SOLDIER = 11;
    const ASSEMBLE_ARMY_TYPE = 12;
    const TARGET_GAMER_POWER = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MAX_COMBAT_SOLDIER => array(
            'name' => 'max_combat_soldier',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STAMINA => array(
            'name' => 'stamina',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STAMINA_TIME => array(
            'name' => 'stamina_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEAGUE_MONSTER_TIMES => array(
            'name' => 'league_monster_times',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FORWARD_TIME => array(
            'name' => 'forward_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GETRES_SPEED => array(
            'name' => 'getres_speed',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RES_COUNT => array(
            'name' => 'res_count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CUR_GAMER => array(
            'name' => 'cur_gamer',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAX_GAMER => array(
            'name' => 'max_gamer',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CUR_SOLDIER => array(
            'name' => 'cur_soldier',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAX_SOLDIER => array(
            'name' => 'max_soldier',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASSEMBLE_ARMY_TYPE => array(
            'name' => 'assemble_army_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TARGET_GAMER_POWER => array(
            'name' => 'target_gamer_power',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::MAX_COMBAT_SOLDIER] = null;
        $this->values[self::STAMINA] = null;
        $this->values[self::STAMINA_TIME] = null;
        $this->values[self::LEAGUE_MONSTER_TIMES] = null;
        $this->values[self::FORWARD_TIME] = null;
        $this->values[self::GETRES_SPEED] = null;
        $this->values[self::RES_COUNT] = null;
        $this->values[self::CUR_GAMER] = null;
        $this->values[self::MAX_GAMER] = null;
        $this->values[self::CUR_SOLDIER] = null;
        $this->values[self::MAX_SOLDIER] = null;
        $this->values[self::ASSEMBLE_ARMY_TYPE] = null;
        $this->values[self::TARGET_GAMER_POWER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'max_combat_soldier' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxCombatSoldier($value)
    {
        return $this->set(self::MAX_COMBAT_SOLDIER, $value);
    }

    /**
     * Returns value of 'max_combat_soldier' property
     *
     * @return integer
     */
    public function getMaxCombatSoldier()
    {
        $value = $this->get(self::MAX_COMBAT_SOLDIER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'stamina' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStamina($value)
    {
        return $this->set(self::STAMINA, $value);
    }

    /**
     * Returns value of 'stamina' property
     *
     * @return integer
     */
    public function getStamina()
    {
        $value = $this->get(self::STAMINA);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'stamina_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStaminaTime($value)
    {
        return $this->set(self::STAMINA_TIME, $value);
    }

    /**
     * Returns value of 'stamina_time' property
     *
     * @return integer
     */
    public function getStaminaTime()
    {
        $value = $this->get(self::STAMINA_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'league_monster_times' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLeagueMonsterTimes($value)
    {
        return $this->set(self::LEAGUE_MONSTER_TIMES, $value);
    }

    /**
     * Returns value of 'league_monster_times' property
     *
     * @return integer
     */
    public function getLeagueMonsterTimes()
    {
        $value = $this->get(self::LEAGUE_MONSTER_TIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'forward_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setForwardTime($value)
    {
        return $this->set(self::FORWARD_TIME, $value);
    }

    /**
     * Returns value of 'forward_time' property
     *
     * @return integer
     */
    public function getForwardTime()
    {
        $value = $this->get(self::FORWARD_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'getres_speed' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGetresSpeed($value)
    {
        return $this->set(self::GETRES_SPEED, $value);
    }

    /**
     * Returns value of 'getres_speed' property
     *
     * @return integer
     */
    public function getGetresSpeed()
    {
        $value = $this->get(self::GETRES_SPEED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'res_count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResCount($value)
    {
        return $this->set(self::RES_COUNT, $value);
    }

    /**
     * Returns value of 'res_count' property
     *
     * @return integer
     */
    public function getResCount()
    {
        $value = $this->get(self::RES_COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'cur_gamer' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurGamer($value)
    {
        return $this->set(self::CUR_GAMER, $value);
    }

    /**
     * Returns value of 'cur_gamer' property
     *
     * @return integer
     */
    public function getCurGamer()
    {
        $value = $this->get(self::CUR_GAMER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'max_gamer' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxGamer($value)
    {
        return $this->set(self::MAX_GAMER, $value);
    }

    /**
     * Returns value of 'max_gamer' property
     *
     * @return integer
     */
    public function getMaxGamer()
    {
        $value = $this->get(self::MAX_GAMER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'cur_soldier' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurSoldier($value)
    {
        return $this->set(self::CUR_SOLDIER, $value);
    }

    /**
     * Returns value of 'cur_soldier' property
     *
     * @return integer
     */
    public function getCurSoldier()
    {
        $value = $this->get(self::CUR_SOLDIER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'max_soldier' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxSoldier($value)
    {
        return $this->set(self::MAX_SOLDIER, $value);
    }

    /**
     * Returns value of 'max_soldier' property
     *
     * @return integer
     */
    public function getMaxSoldier()
    {
        $value = $this->get(self::MAX_SOLDIER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'assemble_army_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAssembleArmyType($value)
    {
        return $this->set(self::ASSEMBLE_ARMY_TYPE, $value);
    }

    /**
     * Returns value of 'assemble_army_type' property
     *
     * @return integer
     */
    public function getAssembleArmyType()
    {
        $value = $this->get(self::ASSEMBLE_ARMY_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'target_gamer_power' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTargetGamerPower($value)
    {
        return $this->set(self::TARGET_GAMER_POWER, $value);
    }

    /**
     * Returns value of 'target_gamer_power' property
     *
     * @return integer
     */
    public function getTargetGamerPower()
    {
        $value = $this->get(self::TARGET_GAMER_POWER);
        return $value === null ? (integer)$value : $value;
    }
}
}