<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_CombatMail message
 */
class PB_CombatMail extends \ProtobufMessage
{
    /* Field index constants */
    const GAMER = 1;
    const COMBAT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAMER => array(
            'name' => 'gamer',
            'repeated' => true,
            'type' => '\PB_CombatMailGamer'
        ),
        self::COMBAT => array(
            'name' => 'combat',
            'required' => false,
            'type' => '\PB_Combat'
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
        $this->values[self::GAMER] = array();
        $this->values[self::COMBAT] = null;
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
     * Appends value to 'gamer' list
     *
     * @param \PB_CombatMailGamer $value Value to append
     *
     * @return null
     */
    public function appendGamer(\PB_CombatMailGamer $value)
    {
        return $this->append(self::GAMER, $value);
    }

    /**
     * Clears 'gamer' list
     *
     * @return null
     */
    public function clearGamer()
    {
        return $this->clear(self::GAMER);
    }

    /**
     * Returns 'gamer' list
     *
     * @return \PB_CombatMailGamer[]
     */
    public function getGamer()
    {
        return $this->get(self::GAMER);
    }

    /**
     * Returns 'gamer' iterator
     *
     * @return \ArrayIterator
     */
    public function getGamerIterator()
    {
        return new \ArrayIterator($this->get(self::GAMER));
    }

    /**
     * Returns element from 'gamer' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_CombatMailGamer
     */
    public function getGamerAt($offset)
    {
        return $this->get(self::GAMER, $offset);
    }

    /**
     * Returns count of 'gamer' list
     *
     * @return int
     */
    public function getGamerCount()
    {
        return $this->count(self::GAMER);
    }

    /**
     * Sets value of 'combat' property
     *
     * @param \PB_Combat $value Property value
     *
     * @return null
     */
    public function setCombat(\PB_Combat $value=null)
    {
        return $this->set(self::COMBAT, $value);
    }

    /**
     * Returns value of 'combat' property
     *
     * @return \PB_Combat
     */
    public function getCombat()
    {
        return $this->get(self::COMBAT);
    }
}
}