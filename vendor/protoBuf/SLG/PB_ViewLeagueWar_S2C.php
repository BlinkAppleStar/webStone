<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ViewLeagueWar_S2C message
 */
class PB_ViewLeagueWar_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const ASSEMBLE_INFO = 1;
    const COMBAT_INFO = 2;
    const JOINED_ARMY = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ASSEMBLE_INFO => array(
            'name' => 'assemble_info',
            'repeated' => true,
            'type' => '\PB_AssembleInfo'
        ),
        self::COMBAT_INFO => array(
            'name' => 'combat_info',
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
        $this->values[self::ASSEMBLE_INFO] = array();
        $this->values[self::COMBAT_INFO] = array();
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
     * Appends value to 'assemble_info' list
     *
     * @param \PB_AssembleInfo $value Value to append
     *
     * @return null
     */
    public function appendAssembleInfo(\PB_AssembleInfo $value)
    {
        return $this->append(self::ASSEMBLE_INFO, $value);
    }

    /**
     * Clears 'assemble_info' list
     *
     * @return null
     */
    public function clearAssembleInfo()
    {
        return $this->clear(self::ASSEMBLE_INFO);
    }

    /**
     * Returns 'assemble_info' list
     *
     * @return \PB_AssembleInfo[]
     */
    public function getAssembleInfo()
    {
        return $this->get(self::ASSEMBLE_INFO);
    }

    /**
     * Returns 'assemble_info' iterator
     *
     * @return \ArrayIterator
     */
    public function getAssembleInfoIterator()
    {
        return new \ArrayIterator($this->get(self::ASSEMBLE_INFO));
    }

    /**
     * Returns element from 'assemble_info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_AssembleInfo
     */
    public function getAssembleInfoAt($offset)
    {
        return $this->get(self::ASSEMBLE_INFO, $offset);
    }

    /**
     * Returns count of 'assemble_info' list
     *
     * @return int
     */
    public function getAssembleInfoCount()
    {
        return $this->count(self::ASSEMBLE_INFO);
    }

    /**
     * Appends value to 'combat_info' list
     *
     * @param \PB_Combat $value Value to append
     *
     * @return null
     */
    public function appendCombatInfo(\PB_Combat $value)
    {
        return $this->append(self::COMBAT_INFO, $value);
    }

    /**
     * Clears 'combat_info' list
     *
     * @return null
     */
    public function clearCombatInfo()
    {
        return $this->clear(self::COMBAT_INFO);
    }

    /**
     * Returns 'combat_info' list
     *
     * @return \PB_Combat[]
     */
    public function getCombatInfo()
    {
        return $this->get(self::COMBAT_INFO);
    }

    /**
     * Returns 'combat_info' iterator
     *
     * @return \ArrayIterator
     */
    public function getCombatInfoIterator()
    {
        return new \ArrayIterator($this->get(self::COMBAT_INFO));
    }

    /**
     * Returns element from 'combat_info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Combat
     */
    public function getCombatInfoAt($offset)
    {
        return $this->get(self::COMBAT_INFO, $offset);
    }

    /**
     * Returns count of 'combat_info' list
     *
     * @return int
     */
    public function getCombatInfoCount()
    {
        return $this->count(self::COMBAT_INFO);
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