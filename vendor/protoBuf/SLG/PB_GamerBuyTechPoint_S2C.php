<?php
/**
 * Auto generated from Gamer.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerBuyTechPoint_S2C message
 */
class PB_GamerBuyTechPoint_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const CUR_TIMES = 2;
    const TOTAL_TIMES = 3;
    const RES_INDEX = 4;
    const RES_COUNT = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CUR_TIMES => array(
            'name' => 'cur_times',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTAL_TIMES => array(
            'name' => 'total_times',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RES_INDEX => array(
            'name' => 'res_index',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RES_COUNT => array(
            'name' => 'res_count',
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
        $this->values[self::ID] = null;
        $this->values[self::CUR_TIMES] = null;
        $this->values[self::TOTAL_TIMES] = null;
        $this->values[self::RES_INDEX] = array();
        $this->values[self::RES_COUNT] = array();
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
     * Sets value of 'total_times' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalTimes($value)
    {
        return $this->set(self::TOTAL_TIMES, $value);
    }

    /**
     * Returns value of 'total_times' property
     *
     * @return integer
     */
    public function getTotalTimes()
    {
        $value = $this->get(self::TOTAL_TIMES);
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
     * Appends value to 'res_count' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendResCount($value)
    {
        return $this->append(self::RES_COUNT, $value);
    }

    /**
     * Clears 'res_count' list
     *
     * @return null
     */
    public function clearResCount()
    {
        return $this->clear(self::RES_COUNT);
    }

    /**
     * Returns 'res_count' list
     *
     * @return integer[]
     */
    public function getResCount()
    {
        return $this->get(self::RES_COUNT);
    }

    /**
     * Returns 'res_count' iterator
     *
     * @return \ArrayIterator
     */
    public function getResCountIterator()
    {
        return new \ArrayIterator($this->get(self::RES_COUNT));
    }

    /**
     * Returns element from 'res_count' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getResCountAt($offset)
    {
        return $this->get(self::RES_COUNT, $offset);
    }

    /**
     * Returns count of 'res_count' list
     *
     * @return int
     */
    public function getResCountCount()
    {
        return $this->count(self::RES_COUNT);
    }
}
}