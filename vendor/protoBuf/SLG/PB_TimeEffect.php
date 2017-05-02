<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_TimeEffect message
 */
class PB_TimeEffect extends \ProtobufMessage
{
    /* Field index constants */
    const INNER_PERCENT = 1;
    const INNER_VALUE = 2;
    const OUTER_PERCENT = 3;
    const OUTER_VALUE = 4;
    const END_TIME = 5;
    const ID = 6;
    const COUNT = 7;
    const TOTAL_TIME = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INNER_PERCENT => array(
            'default' => 0,
            'name' => 'inner_percent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_DOUBLE,
        ),
        self::INNER_VALUE => array(
            'default' => 0,
            'name' => 'inner_value',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_DOUBLE,
        ),
        self::OUTER_PERCENT => array(
            'default' => 1,
            'name' => 'outer_percent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_DOUBLE,
        ),
        self::OUTER_VALUE => array(
            'default' => 0,
            'name' => 'outer_value',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_DOUBLE,
        ),
        self::END_TIME => array(
            'name' => 'end_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        self::TOTAL_TIME => array(
            'name' => 'total_time',
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
        $this->values[self::INNER_PERCENT] = self::$fields[self::INNER_PERCENT]['default'];
        $this->values[self::INNER_VALUE] = self::$fields[self::INNER_VALUE]['default'];
        $this->values[self::OUTER_PERCENT] = self::$fields[self::OUTER_PERCENT]['default'];
        $this->values[self::OUTER_VALUE] = self::$fields[self::OUTER_VALUE]['default'];
        $this->values[self::END_TIME] = null;
        $this->values[self::ID] = null;
        $this->values[self::COUNT] = null;
        $this->values[self::TOTAL_TIME] = null;
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
     * Sets value of 'inner_percent' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setInnerPercent($value)
    {
        return $this->set(self::INNER_PERCENT, $value);
    }

    /**
     * Returns value of 'inner_percent' property
     *
     * @return double
     */
    public function getInnerPercent()
    {
        $value = $this->get(self::INNER_PERCENT);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'inner_value' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setInnerValue($value)
    {
        return $this->set(self::INNER_VALUE, $value);
    }

    /**
     * Returns value of 'inner_value' property
     *
     * @return double
     */
    public function getInnerValue()
    {
        $value = $this->get(self::INNER_VALUE);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'outer_percent' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setOuterPercent($value)
    {
        return $this->set(self::OUTER_PERCENT, $value);
    }

    /**
     * Returns value of 'outer_percent' property
     *
     * @return double
     */
    public function getOuterPercent()
    {
        $value = $this->get(self::OUTER_PERCENT);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'outer_value' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setOuterValue($value)
    {
        return $this->set(self::OUTER_VALUE, $value);
    }

    /**
     * Returns value of 'outer_value' property
     *
     * @return double
     */
    public function getOuterValue()
    {
        $value = $this->get(self::OUTER_VALUE);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'end_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEndTime($value)
    {
        return $this->set(self::END_TIME, $value);
    }

    /**
     * Returns value of 'end_time' property
     *
     * @return integer
     */
    public function getEndTime()
    {
        $value = $this->get(self::END_TIME);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'total_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalTime($value)
    {
        return $this->set(self::TOTAL_TIME, $value);
    }

    /**
     * Returns value of 'total_time' property
     *
     * @return integer
     */
    public function getTotalTime()
    {
        $value = $this->get(self::TOTAL_TIME);
        return $value === null ? (integer)$value : $value;
    }
}
}