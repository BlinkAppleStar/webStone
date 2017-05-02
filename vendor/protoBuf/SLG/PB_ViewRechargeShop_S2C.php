<?php
/**
 * Auto generated from Bag.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ViewRechargeShop_S2C message
 */
class PB_ViewRechargeShop_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const RECHARGE_ID = 2;
    const LEFT_TIME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECHARGE_ID => array(
            'name' => 'recharge_id',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEFT_TIME => array(
            'name' => 'left_time',
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
        $this->values[self::ID] = null;
        $this->values[self::RECHARGE_ID] = array();
        $this->values[self::LEFT_TIME] = null;
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
     * Appends value to 'recharge_id' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendRechargeId($value)
    {
        return $this->append(self::RECHARGE_ID, $value);
    }

    /**
     * Clears 'recharge_id' list
     *
     * @return null
     */
    public function clearRechargeId()
    {
        return $this->clear(self::RECHARGE_ID);
    }

    /**
     * Returns 'recharge_id' list
     *
     * @return integer[]
     */
    public function getRechargeId()
    {
        return $this->get(self::RECHARGE_ID);
    }

    /**
     * Returns 'recharge_id' iterator
     *
     * @return \ArrayIterator
     */
    public function getRechargeIdIterator()
    {
        return new \ArrayIterator($this->get(self::RECHARGE_ID));
    }

    /**
     * Returns element from 'recharge_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getRechargeIdAt($offset)
    {
        return $this->get(self::RECHARGE_ID, $offset);
    }

    /**
     * Returns count of 'recharge_id' list
     *
     * @return int
     */
    public function getRechargeIdCount()
    {
        return $this->count(self::RECHARGE_ID);
    }

    /**
     * Sets value of 'left_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLeftTime($value)
    {
        return $this->set(self::LEFT_TIME, $value);
    }

    /**
     * Returns value of 'left_time' property
     *
     * @return integer
     */
    public function getLeftTime()
    {
        $value = $this->get(self::LEFT_TIME);
        return $value === null ? (integer)$value : $value;
    }
}
}