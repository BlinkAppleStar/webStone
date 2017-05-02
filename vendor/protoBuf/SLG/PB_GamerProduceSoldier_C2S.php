<?php
/**
 * Auto generated from Soldier.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerProduceSoldier_C2S message
 */
class PB_GamerProduceSoldier_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const DIRECT = 2;
    const SID = 3;
    const COUNT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DIRECT => array(
            'name' => 'direct',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SID => array(
            'name' => 'sid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COUNT => array(
            'name' => 'count',
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
        $this->values[self::DIRECT] = null;
        $this->values[self::SID] = null;
        $this->values[self::COUNT] = null;
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
     * Sets value of 'direct' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDirect($value)
    {
        return $this->set(self::DIRECT, $value);
    }

    /**
     * Returns value of 'direct' property
     *
     * @return integer
     */
    public function getDirect()
    {
        $value = $this->get(self::DIRECT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'sid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSid($value)
    {
        return $this->set(self::SID, $value);
    }

    /**
     * Returns value of 'sid' property
     *
     * @return integer
     */
    public function getSid()
    {
        $value = $this->get(self::SID);
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
}
}