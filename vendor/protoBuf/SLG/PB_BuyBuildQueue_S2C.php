<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_BuyBuildQueue_S2C message
 */
class PB_BuyBuildQueue_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const COST_RES_TYPE = 1;
    const COST_RES_NUM = 2;
    const TIME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COST_RES_TYPE => array(
            'name' => 'cost_res_type',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COST_RES_NUM => array(
            'name' => 'cost_res_num',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIME => array(
            'name' => 'time',
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
        $this->values[self::COST_RES_TYPE] = array();
        $this->values[self::COST_RES_NUM] = array();
        $this->values[self::TIME] = null;
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
     * Appends value to 'cost_res_type' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendCostResType($value)
    {
        return $this->append(self::COST_RES_TYPE, $value);
    }

    /**
     * Clears 'cost_res_type' list
     *
     * @return null
     */
    public function clearCostResType()
    {
        return $this->clear(self::COST_RES_TYPE);
    }

    /**
     * Returns 'cost_res_type' list
     *
     * @return integer[]
     */
    public function getCostResType()
    {
        return $this->get(self::COST_RES_TYPE);
    }

    /**
     * Returns 'cost_res_type' iterator
     *
     * @return \ArrayIterator
     */
    public function getCostResTypeIterator()
    {
        return new \ArrayIterator($this->get(self::COST_RES_TYPE));
    }

    /**
     * Returns element from 'cost_res_type' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getCostResTypeAt($offset)
    {
        return $this->get(self::COST_RES_TYPE, $offset);
    }

    /**
     * Returns count of 'cost_res_type' list
     *
     * @return int
     */
    public function getCostResTypeCount()
    {
        return $this->count(self::COST_RES_TYPE);
    }

    /**
     * Appends value to 'cost_res_num' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendCostResNum($value)
    {
        return $this->append(self::COST_RES_NUM, $value);
    }

    /**
     * Clears 'cost_res_num' list
     *
     * @return null
     */
    public function clearCostResNum()
    {
        return $this->clear(self::COST_RES_NUM);
    }

    /**
     * Returns 'cost_res_num' list
     *
     * @return integer[]
     */
    public function getCostResNum()
    {
        return $this->get(self::COST_RES_NUM);
    }

    /**
     * Returns 'cost_res_num' iterator
     *
     * @return \ArrayIterator
     */
    public function getCostResNumIterator()
    {
        return new \ArrayIterator($this->get(self::COST_RES_NUM));
    }

    /**
     * Returns element from 'cost_res_num' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getCostResNumAt($offset)
    {
        return $this->get(self::COST_RES_NUM, $offset);
    }

    /**
     * Returns count of 'cost_res_num' list
     *
     * @return int
     */
    public function getCostResNumCount()
    {
        return $this->count(self::COST_RES_NUM);
    }

    /**
     * Sets value of 'time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTime($value)
    {
        return $this->set(self::TIME, $value);
    }

    /**
     * Returns value of 'time' property
     *
     * @return integer
     */
    public function getTime()
    {
        $value = $this->get(self::TIME);
        return $value === null ? (integer)$value : $value;
    }
}
}