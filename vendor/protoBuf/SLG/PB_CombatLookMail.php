<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_CombatLookMail message
 */
class PB_CombatLookMail extends \ProtobufMessage
{
    /* Field index constants */
    const GAMER = 1;
    const SOLDIER = 2;
    const RESTYPE = 3;
    const RESCOUNT = 4;
    const TECH = 5;
    const MONSTERID = 6;
    const MONSTERPOS = 7;
    const TOTAL_RESTYPE = 8;
    const TOTAL_RESCOUNT = 9;
    const SUPPORTS = 10;
    const LEAGUE_SHORT = 11;
    const BEACON_LEVEL = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAMER => array(
            'name' => 'gamer',
            'required' => false,
            'type' => '\PB_Gamer'
        ),
        self::SOLDIER => array(
            'name' => 'soldier',
            'repeated' => true,
            'type' => '\PB_Soldier'
        ),
        self::RESTYPE => array(
            'name' => 'restype',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RESCOUNT => array(
            'name' => 'rescount',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TECH => array(
            'name' => 'tech',
            'repeated' => true,
            'type' => '\PB_Tech'
        ),
        self::MONSTERID => array(
            'name' => 'monsterid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MONSTERPOS => array(
            'name' => 'monsterpos',
            'required' => false,
            'type' => '\PB_Vec2'
        ),
        self::TOTAL_RESTYPE => array(
            'name' => 'total_restype',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTAL_RESCOUNT => array(
            'name' => 'total_rescount',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SUPPORTS => array(
            'name' => 'supports',
            'repeated' => true,
            'type' => '\PB_Combat'
        ),
        self::LEAGUE_SHORT => array(
            'name' => 'league_short',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BEACON_LEVEL => array(
            'name' => 'beacon_level',
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
        $this->values[self::GAMER] = null;
        $this->values[self::SOLDIER] = array();
        $this->values[self::RESTYPE] = array();
        $this->values[self::RESCOUNT] = array();
        $this->values[self::TECH] = array();
        $this->values[self::MONSTERID] = null;
        $this->values[self::MONSTERPOS] = null;
        $this->values[self::TOTAL_RESTYPE] = array();
        $this->values[self::TOTAL_RESCOUNT] = array();
        $this->values[self::SUPPORTS] = array();
        $this->values[self::LEAGUE_SHORT] = null;
        $this->values[self::BEACON_LEVEL] = null;
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
     * Sets value of 'gamer' property
     *
     * @param \PB_Gamer $value Property value
     *
     * @return null
     */
    public function setGamer(\PB_Gamer $value=null)
    {
        return $this->set(self::GAMER, $value);
    }

    /**
     * Returns value of 'gamer' property
     *
     * @return \PB_Gamer
     */
    public function getGamer()
    {
        return $this->get(self::GAMER);
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
     * Appends value to 'restype' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendRestype($value)
    {
        return $this->append(self::RESTYPE, $value);
    }

    /**
     * Clears 'restype' list
     *
     * @return null
     */
    public function clearRestype()
    {
        return $this->clear(self::RESTYPE);
    }

    /**
     * Returns 'restype' list
     *
     * @return integer[]
     */
    public function getRestype()
    {
        return $this->get(self::RESTYPE);
    }

    /**
     * Returns 'restype' iterator
     *
     * @return \ArrayIterator
     */
    public function getRestypeIterator()
    {
        return new \ArrayIterator($this->get(self::RESTYPE));
    }

    /**
     * Returns element from 'restype' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getRestypeAt($offset)
    {
        return $this->get(self::RESTYPE, $offset);
    }

    /**
     * Returns count of 'restype' list
     *
     * @return int
     */
    public function getRestypeCount()
    {
        return $this->count(self::RESTYPE);
    }

    /**
     * Appends value to 'rescount' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendRescount($value)
    {
        return $this->append(self::RESCOUNT, $value);
    }

    /**
     * Clears 'rescount' list
     *
     * @return null
     */
    public function clearRescount()
    {
        return $this->clear(self::RESCOUNT);
    }

    /**
     * Returns 'rescount' list
     *
     * @return integer[]
     */
    public function getRescount()
    {
        return $this->get(self::RESCOUNT);
    }

    /**
     * Returns 'rescount' iterator
     *
     * @return \ArrayIterator
     */
    public function getRescountIterator()
    {
        return new \ArrayIterator($this->get(self::RESCOUNT));
    }

    /**
     * Returns element from 'rescount' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getRescountAt($offset)
    {
        return $this->get(self::RESCOUNT, $offset);
    }

    /**
     * Returns count of 'rescount' list
     *
     * @return int
     */
    public function getRescountCount()
    {
        return $this->count(self::RESCOUNT);
    }

    /**
     * Appends value to 'tech' list
     *
     * @param \PB_Tech $value Value to append
     *
     * @return null
     */
    public function appendTech(\PB_Tech $value)
    {
        return $this->append(self::TECH, $value);
    }

    /**
     * Clears 'tech' list
     *
     * @return null
     */
    public function clearTech()
    {
        return $this->clear(self::TECH);
    }

    /**
     * Returns 'tech' list
     *
     * @return \PB_Tech[]
     */
    public function getTech()
    {
        return $this->get(self::TECH);
    }

    /**
     * Returns 'tech' iterator
     *
     * @return \ArrayIterator
     */
    public function getTechIterator()
    {
        return new \ArrayIterator($this->get(self::TECH));
    }

    /**
     * Returns element from 'tech' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Tech
     */
    public function getTechAt($offset)
    {
        return $this->get(self::TECH, $offset);
    }

    /**
     * Returns count of 'tech' list
     *
     * @return int
     */
    public function getTechCount()
    {
        return $this->count(self::TECH);
    }

    /**
     * Sets value of 'monsterid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMonsterid($value)
    {
        return $this->set(self::MONSTERID, $value);
    }

    /**
     * Returns value of 'monsterid' property
     *
     * @return integer
     */
    public function getMonsterid()
    {
        $value = $this->get(self::MONSTERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'monsterpos' property
     *
     * @param \PB_Vec2 $value Property value
     *
     * @return null
     */
    public function setMonsterpos(\PB_Vec2 $value=null)
    {
        return $this->set(self::MONSTERPOS, $value);
    }

    /**
     * Returns value of 'monsterpos' property
     *
     * @return \PB_Vec2
     */
    public function getMonsterpos()
    {
        return $this->get(self::MONSTERPOS);
    }

    /**
     * Appends value to 'total_restype' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendTotalRestype($value)
    {
        return $this->append(self::TOTAL_RESTYPE, $value);
    }

    /**
     * Clears 'total_restype' list
     *
     * @return null
     */
    public function clearTotalRestype()
    {
        return $this->clear(self::TOTAL_RESTYPE);
    }

    /**
     * Returns 'total_restype' list
     *
     * @return integer[]
     */
    public function getTotalRestype()
    {
        return $this->get(self::TOTAL_RESTYPE);
    }

    /**
     * Returns 'total_restype' iterator
     *
     * @return \ArrayIterator
     */
    public function getTotalRestypeIterator()
    {
        return new \ArrayIterator($this->get(self::TOTAL_RESTYPE));
    }

    /**
     * Returns element from 'total_restype' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getTotalRestypeAt($offset)
    {
        return $this->get(self::TOTAL_RESTYPE, $offset);
    }

    /**
     * Returns count of 'total_restype' list
     *
     * @return int
     */
    public function getTotalRestypeCount()
    {
        return $this->count(self::TOTAL_RESTYPE);
    }

    /**
     * Appends value to 'total_rescount' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendTotalRescount($value)
    {
        return $this->append(self::TOTAL_RESCOUNT, $value);
    }

    /**
     * Clears 'total_rescount' list
     *
     * @return null
     */
    public function clearTotalRescount()
    {
        return $this->clear(self::TOTAL_RESCOUNT);
    }

    /**
     * Returns 'total_rescount' list
     *
     * @return integer[]
     */
    public function getTotalRescount()
    {
        return $this->get(self::TOTAL_RESCOUNT);
    }

    /**
     * Returns 'total_rescount' iterator
     *
     * @return \ArrayIterator
     */
    public function getTotalRescountIterator()
    {
        return new \ArrayIterator($this->get(self::TOTAL_RESCOUNT));
    }

    /**
     * Returns element from 'total_rescount' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getTotalRescountAt($offset)
    {
        return $this->get(self::TOTAL_RESCOUNT, $offset);
    }

    /**
     * Returns count of 'total_rescount' list
     *
     * @return int
     */
    public function getTotalRescountCount()
    {
        return $this->count(self::TOTAL_RESCOUNT);
    }

    /**
     * Appends value to 'supports' list
     *
     * @param \PB_Combat $value Value to append
     *
     * @return null
     */
    public function appendSupports(\PB_Combat $value)
    {
        return $this->append(self::SUPPORTS, $value);
    }

    /**
     * Clears 'supports' list
     *
     * @return null
     */
    public function clearSupports()
    {
        return $this->clear(self::SUPPORTS);
    }

    /**
     * Returns 'supports' list
     *
     * @return \PB_Combat[]
     */
    public function getSupports()
    {
        return $this->get(self::SUPPORTS);
    }

    /**
     * Returns 'supports' iterator
     *
     * @return \ArrayIterator
     */
    public function getSupportsIterator()
    {
        return new \ArrayIterator($this->get(self::SUPPORTS));
    }

    /**
     * Returns element from 'supports' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Combat
     */
    public function getSupportsAt($offset)
    {
        return $this->get(self::SUPPORTS, $offset);
    }

    /**
     * Returns count of 'supports' list
     *
     * @return int
     */
    public function getSupportsCount()
    {
        return $this->count(self::SUPPORTS);
    }

    /**
     * Sets value of 'league_short' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLeagueShort($value)
    {
        return $this->set(self::LEAGUE_SHORT, $value);
    }

    /**
     * Returns value of 'league_short' property
     *
     * @return string
     */
    public function getLeagueShort()
    {
        $value = $this->get(self::LEAGUE_SHORT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'beacon_level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBeaconLevel($value)
    {
        return $this->set(self::BEACON_LEVEL, $value);
    }

    /**
     * Returns value of 'beacon_level' property
     *
     * @return integer
     */
    public function getBeaconLevel()
    {
        $value = $this->get(self::BEACON_LEVEL);
        return $value === null ? (integer)$value : $value;
    }
}
}