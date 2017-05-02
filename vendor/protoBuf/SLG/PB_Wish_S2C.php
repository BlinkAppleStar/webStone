<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_Wish_S2C message
 */
class PB_Wish_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const CRITICAL = 1;
    const RES_TYPE = 2;
    const RES_COUNT = 3;
    const REFRESH_TIME = 4;
    const FREE_TIMES = 5;
    const CUR_TIMES = 6;
    const RES_INDEX = 7;
    const RESOURCE = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CRITICAL => array(
            'name' => 'critical',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RES_TYPE => array(
            'name' => 'res_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RES_COUNT => array(
            'name' => 'res_count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REFRESH_TIME => array(
            'name' => 'refresh_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FREE_TIMES => array(
            'name' => 'free_times',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CUR_TIMES => array(
            'name' => 'cur_times',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RES_INDEX => array(
            'name' => 'res_index',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RESOURCE => array(
            'name' => 'resource',
            'repeated' => true,
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
        $this->values[self::CRITICAL] = null;
        $this->values[self::RES_TYPE] = null;
        $this->values[self::RES_COUNT] = null;
        $this->values[self::REFRESH_TIME] = null;
        $this->values[self::FREE_TIMES] = null;
        $this->values[self::CUR_TIMES] = null;
        $this->values[self::RES_INDEX] = array();
        $this->values[self::RESOURCE] = array();
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
     * Sets value of 'critical' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCritical($value)
    {
        return $this->set(self::CRITICAL, $value);
    }

    /**
     * Returns value of 'critical' property
     *
     * @return integer
     */
    public function getCritical()
    {
        $value = $this->get(self::CRITICAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'res_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResType($value)
    {
        return $this->set(self::RES_TYPE, $value);
    }

    /**
     * Returns value of 'res_type' property
     *
     * @return integer
     */
    public function getResType()
    {
        $value = $this->get(self::RES_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'res_count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResCount($value)
    {
        return $this->set(self::RES_COUNT, $value);
    }

    /**
     * Returns value of 'res_count' property
     *
     * @return integer
     */
    public function getResCount()
    {
        $value = $this->get(self::RES_COUNT);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'free_times' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFreeTimes($value)
    {
        return $this->set(self::FREE_TIMES, $value);
    }

    /**
     * Returns value of 'free_times' property
     *
     * @return integer
     */
    public function getFreeTimes()
    {
        $value = $this->get(self::FREE_TIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'cur_times' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurTimes($value)
    {
        return $this->set(self::CUR_TIMES, $value);
    }

    /**
     * Returns value of 'cur_times' property
     *
     * @return integer
     */
    public function getCurTimes()
    {
        $value = $this->get(self::CUR_TIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'res_index' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendResIndex($value)
    {
        return $this->append(self::RES_INDEX, $value);
    }

    /**
     * Clears 'res_index' list
     *
     * @return null
     */
    public function clearResIndex()
    {
        return $this->clear(self::RES_INDEX);
    }

    /**
     * Returns 'res_index' list
     *
     * @return integer[]
     */
    public function getResIndex()
    {
        return $this->get(self::RES_INDEX);
    }

    /**
     * Returns 'res_index' iterator
     *
     * @return \ArrayIterator
     */
    public function getResIndexIterator()
    {
        return new \ArrayIterator($this->get(self::RES_INDEX));
    }

    /**
     * Returns element from 'res_index' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getResIndexAt($offset)
    {
        return $this->get(self::RES_INDEX, $offset);
    }

    /**
     * Returns count of 'res_index' list
     *
     * @return int
     */
    public function getResIndexCount()
    {
        return $this->count(self::RES_INDEX);
    }

    /**
     * Appends value to 'resource' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendResource($value)
    {
        return $this->append(self::RESOURCE, $value);
    }

    /**
     * Clears 'resource' list
     *
     * @return null
     */
    public function clearResource()
    {
        return $this->clear(self::RESOURCE);
    }

    /**
     * Returns 'resource' list
     *
     * @return integer[]
     */
    public function getResource()
    {
        return $this->get(self::RESOURCE);
    }

    /**
     * Returns 'resource' iterator
     *
     * @return \ArrayIterator
     */
    public function getResourceIterator()
    {
        return new \ArrayIterator($this->get(self::RESOURCE));
    }

    /**
     * Returns element from 'resource' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getResourceAt($offset)
    {
        return $this->get(self::RESOURCE, $offset);
    }

    /**
     * Returns count of 'resource' list
     *
     * @return int
     */
    public function getResourceCount()
    {
        return $this->count(self::RESOURCE);
    }
}
}