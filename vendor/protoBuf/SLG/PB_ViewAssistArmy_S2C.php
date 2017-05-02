<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ViewAssistArmy_S2C message
 */
class PB_ViewAssistArmy_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const COMBAT_INFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COMBAT_INFO => array(
            'name' => 'combat_info',
            'repeated' => true,
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
        $this->values[self::ID] = null;
        $this->values[self::COMBAT_INFO] = array();
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
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
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
}
}