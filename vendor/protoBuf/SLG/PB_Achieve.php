<?php
/**
 * Auto generated from GamerAchieve.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_Achieve message
 */
class PB_Achieve extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const COUNT = 2;
    const RECEIVE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COUNT => array(
            'name' => 'count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECEIVE => array(
            'name' => 'receive',
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
        $this->values[self::COUNT] = null;
        $this->values[self::RECEIVE] = null;
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
     * Sets value of 'count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCount($value)
    {
        return $this->set(self::COUNT, $value);
    }

    /**
     * Returns value of 'count' property
     *
     * @return integer
     */
    public function getCount()
    {
        $value = $this->get(self::COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'receive' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setReceive($value)
    {
        return $this->set(self::RECEIVE, $value);
    }

    /**
     * Returns value of 'receive' property
     *
     * @return boolean
     */
    public function getReceive()
    {
        $value = $this->get(self::RECEIVE);
        return $value === null ? (boolean)$value : $value;
    }
}
}