<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_CreateLeague_C2S message
 */
class PB_CreateLeague_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const NAME = 2;
    const REGION = 3;
    const ADD_MODE = 4;
    const LOCATE_TYPE = 5;
    const DESC = 6;
    const FLAG = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REGION => array(
            'name' => 'region',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADD_MODE => array(
            'name' => 'add_mode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOCATE_TYPE => array(
            'name' => 'locate_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DESC => array(
            'name' => 'desc',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FLAG => array(
            'name' => 'flag',
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
        $this->values[self::NAME] = null;
        $this->values[self::REGION] = null;
        $this->values[self::ADD_MODE] = null;
        $this->values[self::LOCATE_TYPE] = null;
        $this->values[self::DESC] = null;
        $this->values[self::FLAG] = null;
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
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'region' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRegion($value)
    {
        return $this->set(self::REGION, $value);
    }

    /**
     * Returns value of 'region' property
     *
     * @return integer
     */
    public function getRegion()
    {
        $value = $this->get(self::REGION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'add_mode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAddMode($value)
    {
        return $this->set(self::ADD_MODE, $value);
    }

    /**
     * Returns value of 'add_mode' property
     *
     * @return integer
     */
    public function getAddMode()
    {
        $value = $this->get(self::ADD_MODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'locate_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLocateType($value)
    {
        return $this->set(self::LOCATE_TYPE, $value);
    }

    /**
     * Returns value of 'locate_type' property
     *
     * @return integer
     */
    public function getLocateType()
    {
        $value = $this->get(self::LOCATE_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'desc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDesc($value)
    {
        return $this->set(self::DESC, $value);
    }

    /**
     * Returns value of 'desc' property
     *
     * @return string
     */
    public function getDesc()
    {
        $value = $this->get(self::DESC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'flag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFlag($value)
    {
        return $this->set(self::FLAG, $value);
    }

    /**
     * Returns value of 'flag' property
     *
     * @return integer
     */
    public function getFlag()
    {
        $value = $this->get(self::FLAG);
        return $value === null ? (integer)$value : $value;
    }
}
}