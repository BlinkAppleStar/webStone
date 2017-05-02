<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_DirectBuild_C2S message
 */
class PB_DirectBuild_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const BID = 1;
    const SUB_INDEX = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BID => array(
            'name' => 'bid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SUB_INDEX => array(
            'name' => 'sub_index',
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
        $this->values[self::BID] = null;
        $this->values[self::SUB_INDEX] = null;
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
     * Sets value of 'bid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBid($value)
    {
        return $this->set(self::BID, $value);
    }

    /**
     * Returns value of 'bid' property
     *
     * @return integer
     */
    public function getBid()
    {
        $value = $this->get(self::BID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'sub_index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSubIndex($value)
    {
        return $this->set(self::SUB_INDEX, $value);
    }

    /**
     * Returns value of 'sub_index' property
     *
     * @return integer
     */
    public function getSubIndex()
    {
        $value = $this->get(self::SUB_INDEX);
        return $value === null ? (integer)$value : $value;
    }
}
}