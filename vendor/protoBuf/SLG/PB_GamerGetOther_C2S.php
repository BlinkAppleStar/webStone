<?php
/**
 * Auto generated from GamerFriends.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetOther_C2S message
 */
class PB_GamerGetOther_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const OTHER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OTHER => array(
            'name' => 'other',
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
        $this->values[self::OTHER] = null;
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
     * Sets value of 'other' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOther($value)
    {
        return $this->set(self::OTHER, $value);
    }

    /**
     * Returns value of 'other' property
     *
     * @return integer
     */
    public function getOther()
    {
        $value = $this->get(self::OTHER);
        return $value === null ? (integer)$value : $value;
    }
}
}