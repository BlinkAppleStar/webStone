<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ViewAssemble_S2C message
 */
class PB_ViewAssemble_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const LEAGUE_ID = 1;
    const ARMY = 2;
    const JOINED_ARMY = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LEAGUE_ID => array(
            'name' => 'league_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARMY => array(
            'name' => 'army',
            'repeated' => true,
            'type' => '\PB_Combat'
        ),
        self::JOINED_ARMY => array(
            'name' => 'joined_army',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::LEAGUE_ID] = null;
        $this->values[self::ARMY] = array();
        $this->values[self::JOINED_ARMY] = array();
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
     * Sets value of 'league_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLeagueId($value)
    {
        return $this->set(self::LEAGUE_ID, $value);
    }

    /**
     * Returns value of 'league_id' property
     *
     * @return integer
     */
    public function getLeagueId()
    {
        $value = $this->get(self::LEAGUE_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'army' list
     *
     * @param \PB_Combat $value Value to append
     *
     * @return null
     */
    public function appendArmy(\PB_Combat $value)
    {
        return $this->append(self::ARMY, $value);
    }

    /**
     * Clears 'army' list
     *
     * @return null
     */
    public function clearArmy()
    {
        return $this->clear(self::ARMY);
    }

    /**
     * Returns 'army' list
     *
     * @return \PB_Combat[]
     */
    public function getArmy()
    {
        return $this->get(self::ARMY);
    }

    /**
     * Returns 'army' iterator
     *
     * @return \ArrayIterator
     */
    public function getArmyIterator()
    {
        return new \ArrayIterator($this->get(self::ARMY));
    }

    /**
     * Returns element from 'army' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Combat
     */
    public function getArmyAt($offset)
    {
        return $this->get(self::ARMY, $offset);
    }

    /**
     * Returns count of 'army' list
     *
     * @return int
     */
    public function getArmyCount()
    {
        return $this->count(self::ARMY);
    }

    /**
     * Appends value to 'joined_army' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendJoinedArmy($value)
    {
        return $this->append(self::JOINED_ARMY, $value);
    }

    /**
     * Clears 'joined_army' list
     *
     * @return null
     */
    public function clearJoinedArmy()
    {
        return $this->clear(self::JOINED_ARMY);
    }

    /**
     * Returns 'joined_army' list
     *
     * @return string[]
     */
    public function getJoinedArmy()
    {
        return $this->get(self::JOINED_ARMY);
    }

    /**
     * Returns 'joined_army' iterator
     *
     * @return \ArrayIterator
     */
    public function getJoinedArmyIterator()
    {
        return new \ArrayIterator($this->get(self::JOINED_ARMY));
    }

    /**
     * Returns element from 'joined_army' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getJoinedArmyAt($offset)
    {
        return $this->get(self::JOINED_ARMY, $offset);
    }

    /**
     * Returns count of 'joined_army' list
     *
     * @return int
     */
    public function getJoinedArmyCount()
    {
        return $this->count(self::JOINED_ARMY);
    }
}
}