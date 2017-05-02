<?php
/**
 * Auto generated from Server.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_RedisNotifyRecharge message
 */
class PB_RedisNotifyRecharge extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const RECHARGE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECHARGE => array(
            'name' => 'recharge',
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
        $this->values[self::RECHARGE] = null;
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
     * Sets value of 'recharge' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecharge($value)
    {
        return $this->set(self::RECHARGE, $value);
    }

    /**
     * Returns value of 'recharge' property
     *
     * @return integer
     */
    public function getRecharge()
    {
        $value = $this->get(self::RECHARGE);
        return $value === null ? (integer)$value : $value;
    }
}
}