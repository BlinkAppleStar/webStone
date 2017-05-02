<?php
/**
 * Auto generated from GamerFriends.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetWorldTalk_C2S message
 */
class PB_GamerGetWorldTalk_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const BEGIN = 2;
    const MAX = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BEGIN => array(
            'name' => 'begin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAX => array(
            'name' => 'max',
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
        $this->values[self::BEGIN] = null;
        $this->values[self::MAX] = null;
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
     * Sets value of 'begin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBegin($value)
    {
        return $this->set(self::BEGIN, $value);
    }

    /**
     * Returns value of 'begin' property
     *
     * @return integer
     */
    public function getBegin()
    {
        $value = $this->get(self::BEGIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'max' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMax($value)
    {
        return $this->set(self::MAX, $value);
    }

    /**
     * Returns value of 'max' property
     *
     * @return integer
     */
    public function getMax()
    {
        $value = $this->get(self::MAX);
        return $value === null ? (integer)$value : $value;
    }
}
}