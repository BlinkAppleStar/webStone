<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_CreateAssemble_C2S message
 */
class PB_CreateAssemble_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const TARGET = 2;
    const SOLDIER = 3;
    const TOTAL_TIME = 4;
    const AUTO_START = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TARGET => array(
            'name' => 'target',
            'required' => false,
            'type' => '\PB_Vec2'
        ),
        self::SOLDIER => array(
            'name' => 'soldier',
            'repeated' => true,
            'type' => '\PB_Soldier'
        ),
        self::TOTAL_TIME => array(
            'name' => 'total_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AUTO_START => array(
            'name' => 'auto_start',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::TARGET] = null;
        $this->values[self::SOLDIER] = array();
        $this->values[self::TOTAL_TIME] = null;
        $this->values[self::AUTO_START] = null;
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
     * Sets value of 'target' property
     *
     * @param \PB_Vec2 $value Property value
     *
     * @return null
     */
    public function setTarget(\PB_Vec2 $value=null)
    {
        return $this->set(self::TARGET, $value);
    }

    /**
     * Returns value of 'target' property
     *
     * @return \PB_Vec2
     */
    public function getTarget()
    {
        return $this->get(self::TARGET);
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
     * Sets value of 'total_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalTime($value)
    {
        return $this->set(self::TOTAL_TIME, $value);
    }

    /**
     * Returns value of 'total_time' property
     *
     * @return integer
     */
    public function getTotalTime()
    {
        $value = $this->get(self::TOTAL_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'auto_start' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setAutoStart($value)
    {
        return $this->set(self::AUTO_START, $value);
    }

    /**
     * Returns value of 'auto_start' property
     *
     * @return boolean
     */
    public function getAutoStart()
    {
        $value = $this->get(self::AUTO_START);
        return $value === null ? (boolean)$value : $value;
    }
}
}