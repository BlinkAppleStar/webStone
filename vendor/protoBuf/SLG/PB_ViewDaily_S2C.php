<?php
/**
 * Auto generated from Quest.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ViewDaily_S2C message
 */
class PB_ViewDaily_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const AWARD_TAKEN = 1;
    const DAILY_NUM = 2;
    const REFRESH_TIME = 3;
    const DAILY_SCORE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::AWARD_TAKEN => array(
            'name' => 'award_taken',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DAILY_NUM => array(
            'name' => 'daily_num',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REFRESH_TIME => array(
            'name' => 'refresh_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DAILY_SCORE => array(
            'name' => 'daily_score',
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
        $this->values[self::AWARD_TAKEN] = null;
        $this->values[self::DAILY_NUM] = array();
        $this->values[self::REFRESH_TIME] = null;
        $this->values[self::DAILY_SCORE] = null;
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
     * Sets value of 'award_taken' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAwardTaken($value)
    {
        return $this->set(self::AWARD_TAKEN, $value);
    }

    /**
     * Returns value of 'award_taken' property
     *
     * @return integer
     */
    public function getAwardTaken()
    {
        $value = $this->get(self::AWARD_TAKEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'daily_num' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendDailyNum($value)
    {
        return $this->append(self::DAILY_NUM, $value);
    }

    /**
     * Clears 'daily_num' list
     *
     * @return null
     */
    public function clearDailyNum()
    {
        return $this->clear(self::DAILY_NUM);
    }

    /**
     * Returns 'daily_num' list
     *
     * @return integer[]
     */
    public function getDailyNum()
    {
        return $this->get(self::DAILY_NUM);
    }

    /**
     * Returns 'daily_num' iterator
     *
     * @return \ArrayIterator
     */
    public function getDailyNumIterator()
    {
        return new \ArrayIterator($this->get(self::DAILY_NUM));
    }

    /**
     * Returns element from 'daily_num' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getDailyNumAt($offset)
    {
        return $this->get(self::DAILY_NUM, $offset);
    }

    /**
     * Returns count of 'daily_num' list
     *
     * @return int
     */
    public function getDailyNumCount()
    {
        return $this->count(self::DAILY_NUM);
    }

    /**
     * Sets value of 'refresh_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRefreshTime($value)
    {
        return $this->set(self::REFRESH_TIME, $value);
    }

    /**
     * Returns value of 'refresh_time' property
     *
     * @return integer
     */
    public function getRefreshTime()
    {
        $value = $this->get(self::REFRESH_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'daily_score' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDailyScore($value)
    {
        return $this->set(self::DAILY_SCORE, $value);
    }

    /**
     * Returns value of 'daily_score' property
     *
     * @return integer
     */
    public function getDailyScore()
    {
        $value = $this->get(self::DAILY_SCORE);
        return $value === null ? (integer)$value : $value;
    }
}
}