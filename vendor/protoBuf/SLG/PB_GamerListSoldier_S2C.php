<?php
/**
 * Auto generated from Soldier.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerListSoldier_S2C message
 */
class PB_GamerListSoldier_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const SOLDIER = 1;
    const MAX_RELIVE_NUM = 2;
    const RELIVE_SPEED = 3;
    const MAX_PRODUCE_NUM = 4;
    const PRODUCE_SPEED = 5;
    const MAX_COMBAT_SOLDIER = 6;
    const STAMINA = 7;
    const STAMINA_TIME = 8;
    const LEAGUE_MONSTER_TIMES = 9;
    const HERO = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SOLDIER => array(
            'name' => 'soldier',
            'repeated' => true,
            'type' => '\PB_Soldier'
        ),
        self::MAX_RELIVE_NUM => array(
            'name' => 'max_relive_num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RELIVE_SPEED => array(
            'name' => 'relive_speed',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAX_PRODUCE_NUM => array(
            'name' => 'max_produce_num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PRODUCE_SPEED => array(
            'name' => 'produce_speed',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        self::HERO => array(
            'name' => 'hero',
            'repeated' => true,
            'type' => '\PB_Hero'
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
        $this->values[self::SOLDIER] = array();
        $this->values[self::MAX_RELIVE_NUM] = null;
        $this->values[self::RELIVE_SPEED] = null;
        $this->values[self::MAX_PRODUCE_NUM] = null;
        $this->values[self::PRODUCE_SPEED] = null;
        $this->values[self::MAX_COMBAT_SOLDIER] = null;
        $this->values[self::STAMINA] = null;
        $this->values[self::STAMINA_TIME] = null;
        $this->values[self::LEAGUE_MONSTER_TIMES] = null;
        $this->values[self::HERO] = array();
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
     * Appends value to 'soldier' list
     *
     * @param \PB_Soldier $value Value to append
     *
     * @return null
     */
    public function appendSoldier(\PB_Soldier $value)
    {
        return $this->append(self::SOLDIER, $value);
    }

    /**
     * Clears 'soldier' list
     *
     * @return null
     */
    public function clearSoldier()
    {
        return $this->clear(self::SOLDIER);
    }

    /**
     * Returns 'soldier' list
     *
     * @return \PB_Soldier[]
     */
    public function getSoldier()
    {
        return $this->get(self::SOLDIER);
    }

    /**
     * Returns 'soldier' iterator
     *
     * @return \ArrayIterator
     */
    public function getSoldierIterator()
    {
        return new \ArrayIterator($this->get(self::SOLDIER));
    }

    /**
     * Returns element from 'soldier' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Soldier
     */
    public function getSoldierAt($offset)
    {
        return $this->get(self::SOLDIER, $offset);
    }

    /**
     * Returns count of 'soldier' list
     *
     * @return int
     */
    public function getSoldierCount()
    {
        return $this->count(self::SOLDIER);
    }

    /**
     * Sets value of 'max_relive_num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxReliveNum($value)
    {
        return $this->set(self::MAX_RELIVE_NUM, $value);
    }

    /**
     * Returns value of 'max_relive_num' property
     *
     * @return integer
     */
    public function getMaxReliveNum()
    {
        $value = $this->get(self::MAX_RELIVE_NUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'relive_speed' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReliveSpeed($value)
    {
        return $this->set(self::RELIVE_SPEED, $value);
    }

    /**
     * Returns value of 'relive_speed' property
     *
     * @return integer
     */
    public function getReliveSpeed()
    {
        $value = $this->get(self::RELIVE_SPEED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'max_produce_num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxProduceNum($value)
    {
        return $this->set(self::MAX_PRODUCE_NUM, $value);
    }

    /**
     * Returns value of 'max_produce_num' property
     *
     * @return integer
     */
    public function getMaxProduceNum()
    {
        $value = $this->get(self::MAX_PRODUCE_NUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'produce_speed' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setProduceSpeed($value)
    {
        return $this->set(self::PRODUCE_SPEED, $value);
    }

    /**
     * Returns value of 'produce_speed' property
     *
     * @return integer
     */
    public function getProduceSpeed()
    {
        $value = $this->get(self::PRODUCE_SPEED);
        return $value === null ? (integer)$value : $value;
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
     * Appends value to 'hero' list
     *
     * @param \PB_Hero $value Value to append
     *
     * @return null
     */
    public function appendHero(\PB_Hero $value)
    {
        return $this->append(self::HERO, $value);
    }

    /**
     * Clears 'hero' list
     *
     * @return null
     */
    public function clearHero()
    {
        return $this->clear(self::HERO);
    }

    /**
     * Returns 'hero' list
     *
     * @return \PB_Hero[]
     */
    public function getHero()
    {
        return $this->get(self::HERO);
    }

    /**
     * Returns 'hero' iterator
     *
     * @return \ArrayIterator
     */
    public function getHeroIterator()
    {
        return new \ArrayIterator($this->get(self::HERO));
    }

    /**
     * Returns element from 'hero' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Hero
     */
    public function getHeroAt($offset)
    {
        return $this->get(self::HERO, $offset);
    }

    /**
     * Returns count of 'hero' list
     *
     * @return int
     */
    public function getHeroCount()
    {
        return $this->count(self::HERO);
    }
}
}