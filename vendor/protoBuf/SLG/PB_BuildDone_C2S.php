<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_BuildDone_C2S message
 */
class PB_BuildDone_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const B_LID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::B_LID => array(
            'name' => 'b_lid',
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
        $this->values[self::B_LID] = null;
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
     * Sets value of 'b_lid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBLid($value)
    {
        return $this->set(self::B_LID, $value);
    }

    /**
     * Returns value of 'b_lid' property
     *
     * @return integer
     */
    public function getBLid()
    {
        $value = $this->get(self::B_LID);
        return $value === null ? (integer)$value : $value;
    }
}
}