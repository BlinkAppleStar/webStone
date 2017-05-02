<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GetCombats_S2C message
 */
class PB_GetCombats_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const COMBAT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COMBAT => array(
            'name' => 'combat',
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
        $this->values[self::COMBAT] = array();
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
     * Appends value to 'combat' list
     *
     * @param \PB_Combat $value Value to append
     *
     * @return null
     */
    public function appendCombat(\PB_Combat $value)
    {
        return $this->append(self::COMBAT, $value);
    }

    /**
     * Clears 'combat' list
     *
     * @return null
     */
    public function clearCombat()
    {
        return $this->clear(self::COMBAT);
    }

    /**
     * Returns 'combat' list
     *
     * @return \PB_Combat[]
     */
    public function getCombat()
    {
        return $this->get(self::COMBAT);
    }

    /**
     * Returns 'combat' iterator
     *
     * @return \ArrayIterator
     */
    public function getCombatIterator()
    {
        return new \ArrayIterator($this->get(self::COMBAT));
    }

    /**
     * Returns element from 'combat' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Combat
     */
    public function getCombatAt($offset)
    {
        return $this->get(self::COMBAT, $offset);
    }

    /**
     * Returns count of 'combat' list
     *
     * @return int
     */
    public function getCombatCount()
    {
        return $this->count(self::COMBAT);
    }
}
}