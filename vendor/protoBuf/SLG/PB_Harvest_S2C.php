<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_Harvest_S2C message
 */
class PB_Harvest_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const RES_INDEX = 1;
    const NUM = 2;
    const TOTAL = 3;
    const TIMESTAMP = 4;
    const B_LID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RES_INDEX => array(
            'name' => 'res_index',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NUM => array(
            'name' => 'num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTAL => array(
            'name' => 'total',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMESTAMP => array(
            'name' => 'timestamp',
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
        $this->values[self::RES_INDEX] = null;
        $this->values[self::NUM] = null;
        $this->values[self::TOTAL] = null;
        $this->values[self::TIMESTAMP] = null;
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
     * Sets value of 'res_index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResIndex($value)
    {
        return $this->set(self::RES_INDEX, $value);
    }

    /**
     * Returns value of 'res_index' property
     *
     * @return integer
     */
    public function getResIndex()
    {
        $value = $this->get(self::RES_INDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNum($value)
    {
        return $this->set(self::NUM, $value);
    }

    /**
     * Returns value of 'num' property
     *
     * @return integer
     */
    public function getNum()
    {
        $value = $this->get(self::NUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'total' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotal($value)
    {
        return $this->set(self::TOTAL, $value);
    }

    /**
     * Returns value of 'total' property
     *
     * @return integer
     */
    public function getTotal()
    {
        $value = $this->get(self::TOTAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimestamp($value)
    {
        return $this->set(self::TIMESTAMP, $value);
    }

    /**
     * Returns value of 'timestamp' property
     *
     * @return integer
     */
    public function getTimestamp()
    {
        $value = $this->get(self::TIMESTAMP);
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