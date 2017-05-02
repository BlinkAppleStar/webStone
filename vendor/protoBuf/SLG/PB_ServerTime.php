<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ServerTime message
 */
class PB_ServerTime extends \ProtobufMessage
{
    /* Field index constants */
    const TIMESTAMP = 1;
    const YEAR = 2;
    const MONTH = 3;
    const DAY = 4;
    const HOUR = 5;
    const MINUTE = 6;
    const SECOND = 7;
    const TIMEZONE = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TIMESTAMP => array(
            'name' => 'timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::YEAR => array(
            'name' => 'year',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MONTH => array(
            'name' => 'month',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DAY => array(
            'name' => 'day',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HOUR => array(
            'name' => 'hour',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MINUTE => array(
            'name' => 'minute',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SECOND => array(
            'name' => 'second',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIMEZONE => array(
            'name' => 'timezone',
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
        $this->values[self::TIMESTAMP] = null;
        $this->values[self::YEAR] = null;
        $this->values[self::MONTH] = null;
        $this->values[self::DAY] = null;
        $this->values[self::HOUR] = null;
        $this->values[self::MINUTE] = null;
        $this->values[self::SECOND] = null;
        $this->values[self::TIMEZONE] = null;
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
     * Sets value of 'year' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setYear($value)
    {
        return $this->set(self::YEAR, $value);
    }

    /**
     * Returns value of 'year' property
     *
     * @return integer
     */
    public function getYear()
    {
        $value = $this->get(self::YEAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'month' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMonth($value)
    {
        return $this->set(self::MONTH, $value);
    }

    /**
     * Returns value of 'month' property
     *
     * @return integer
     */
    public function getMonth()
    {
        $value = $this->get(self::MONTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'day' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDay($value)
    {
        return $this->set(self::DAY, $value);
    }

    /**
     * Returns value of 'day' property
     *
     * @return integer
     */
    public function getDay()
    {
        $value = $this->get(self::DAY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'hour' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHour($value)
    {
        return $this->set(self::HOUR, $value);
    }

    /**
     * Returns value of 'hour' property
     *
     * @return integer
     */
    public function getHour()
    {
        $value = $this->get(self::HOUR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'minute' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMinute($value)
    {
        return $this->set(self::MINUTE, $value);
    }

    /**
     * Returns value of 'minute' property
     *
     * @return integer
     */
    public function getMinute()
    {
        $value = $this->get(self::MINUTE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'second' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSecond($value)
    {
        return $this->set(self::SECOND, $value);
    }

    /**
     * Returns value of 'second' property
     *
     * @return integer
     */
    public function getSecond()
    {
        $value = $this->get(self::SECOND);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'timezone' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimezone($value)
    {
        return $this->set(self::TIMEZONE, $value);
    }

    /**
     * Returns value of 'timezone' property
     *
     * @return integer
     */
    public function getTimezone()
    {
        $value = $this->get(self::TIMEZONE);
        return $value === null ? (integer)$value : $value;
    }
}
}