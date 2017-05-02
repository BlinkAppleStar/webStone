<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_Resource message
 */
class PB_Resource extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const POS = 2;
    const RES_TYPE = 3;
    const RES_COUNT = 4;
    const OWNER = 5;
    const GETRES_SPEED = 6;
    const GETRES_TIME = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POS => array(
            'name' => 'pos',
            'required' => false,
            'type' => '\PB_Vec2'
        ),
        self::RES_TYPE => array(
            'name' => 'res_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RES_COUNT => array(
            'name' => 'res_count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OWNER => array(
            'name' => 'owner',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GETRES_SPEED => array(
            'name' => 'getres_speed',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GETRES_TIME => array(
            'name' => 'getres_time',
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
        $this->values[self::POS] = null;
        $this->values[self::RES_TYPE] = null;
        $this->values[self::RES_COUNT] = null;
        $this->values[self::OWNER] = null;
        $this->values[self::GETRES_SPEED] = null;
        $this->values[self::GETRES_TIME] = null;
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
     * Sets value of 'pos' property
     *
     * @param \PB_Vec2 $value Property value
     *
     * @return null
     */
    public function setPos(\PB_Vec2 $value=null)
    {
        return $this->set(self::POS, $value);
    }

    /**
     * Returns value of 'pos' property
     *
     * @return \PB_Vec2
     */
    public function getPos()
    {
        return $this->get(self::POS);
    }

    /**
     * Sets value of 'res_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResType($value)
    {
        return $this->set(self::RES_TYPE, $value);
    }

    /**
     * Returns value of 'res_type' property
     *
     * @return integer
     */
    public function getResType()
    {
        $value = $this->get(self::RES_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'res_count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResCount($value)
    {
        return $this->set(self::RES_COUNT, $value);
    }

    /**
     * Returns value of 'res_count' property
     *
     * @return integer
     */
    public function getResCount()
    {
        $value = $this->get(self::RES_COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'owner' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOwner($value)
    {
        return $this->set(self::OWNER, $value);
    }

    /**
     * Returns value of 'owner' property
     *
     * @return integer
     */
    public function getOwner()
    {
        $value = $this->get(self::OWNER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'getres_speed' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGetresSpeed($value)
    {
        return $this->set(self::GETRES_SPEED, $value);
    }

    /**
     * Returns value of 'getres_speed' property
     *
     * @return integer
     */
    public function getGetresSpeed()
    {
        $value = $this->get(self::GETRES_SPEED);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'getres_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGetresTime($value)
    {
        return $this->set(self::GETRES_TIME, $value);
    }

    /**
     * Returns value of 'getres_time' property
     *
     * @return integer
     */
    public function getGetresTime()
    {
        $value = $this->get(self::GETRES_TIME);
        return $value === null ? (integer)$value : $value;
    }
}
}