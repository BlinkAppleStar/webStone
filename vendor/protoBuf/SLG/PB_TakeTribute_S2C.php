<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_TakeTribute_S2C message
 */
class PB_TakeTribute_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const ITEM = 2;
    const NEXT_TIME = 3;
    const FULL = 4;
    const NEXT_ITEM = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEM => array(
            'name' => 'item',
            'required' => false,
            'type' => '\PB_Item'
        ),
        self::NEXT_TIME => array(
            'name' => 'next_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FULL => array(
            'name' => 'full',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::NEXT_ITEM => array(
            'name' => 'next_item',
            'required' => false,
            'type' => '\PB_Item'
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
        $this->values[self::ITEM] = null;
        $this->values[self::NEXT_TIME] = null;
        $this->values[self::FULL] = null;
        $this->values[self::NEXT_ITEM] = null;
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
     * Sets value of 'item' property
     *
     * @param \PB_Item $value Property value
     *
     * @return null
     */
    public function setItem(\PB_Item $value=null)
    {
        return $this->set(self::ITEM, $value);
    }

    /**
     * Returns value of 'item' property
     *
     * @return \PB_Item
     */
    public function getItem()
    {
        return $this->get(self::ITEM);
    }

    /**
     * Sets value of 'next_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNextTime($value)
    {
        return $this->set(self::NEXT_TIME, $value);
    }

    /**
     * Returns value of 'next_time' property
     *
     * @return integer
     */
    public function getNextTime()
    {
        $value = $this->get(self::NEXT_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'full' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setFull($value)
    {
        return $this->set(self::FULL, $value);
    }

    /**
     * Returns value of 'full' property
     *
     * @return boolean
     */
    public function getFull()
    {
        $value = $this->get(self::FULL);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'next_item' property
     *
     * @param \PB_Item $value Property value
     *
     * @return null
     */
    public function setNextItem(\PB_Item $value=null)
    {
        return $this->set(self::NEXT_ITEM, $value);
    }

    /**
     * Returns value of 'next_item' property
     *
     * @return \PB_Item
     */
    public function getNextItem()
    {
        return $this->get(self::NEXT_ITEM);
    }
}
}