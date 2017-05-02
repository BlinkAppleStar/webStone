<?php
/**
 * Auto generated from Bag.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerUseItem_C2S message
 */
class PB_GamerUseItem_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ITEM = 1;
    const COUNT = 2;
    const USE_TYPE = 3;
    const TARGET = 4;
    const NAME = 5;
    const PARAMS_INT = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ITEM => array(
            'name' => 'item',
            'required' => false,
            'type' => '\PB_Item'
        ),
        self::COUNT => array(
            'name' => 'count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USE_TYPE => array(
            'name' => 'use_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TARGET => array(
            'name' => 'target',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PARAMS_INT => array(
            'name' => 'params_int',
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
        $this->values[self::ITEM] = null;
        $this->values[self::COUNT] = null;
        $this->values[self::USE_TYPE] = null;
        $this->values[self::TARGET] = null;
        $this->values[self::NAME] = null;
        $this->values[self::PARAMS_INT] = array();
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
     * Sets value of 'item' property
     *
     * @param \PB_Item $value Property value
     *
     * @return null
     */
    public function setItem(\PB_Item $value=null)
    {
        return $this->set(self::ITEM, $value);
    }

    /**
     * Returns value of 'item' property
     *
     * @return \PB_Item
     */
    public function getItem()
    {
        return $this->get(self::ITEM);
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
     * Sets value of 'use_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUseType($value)
    {
        return $this->set(self::USE_TYPE, $value);
    }

    /**
     * Returns value of 'use_type' property
     *
     * @return integer
     */
    public function getUseType()
    {
        $value = $this->get(self::USE_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'target' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTarget($value)
    {
        return $this->set(self::TARGET, $value);
    }

    /**
     * Returns value of 'target' property
     *
     * @return integer
     */
    public function getTarget()
    {
        $value = $this->get(self::TARGET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'params_int' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendParamsInt($value)
    {
        return $this->append(self::PARAMS_INT, $value);
    }

    /**
     * Clears 'params_int' list
     *
     * @return null
     */
    public function clearParamsInt()
    {
        return $this->clear(self::PARAMS_INT);
    }

    /**
     * Returns 'params_int' list
     *
     * @return integer[]
     */
    public function getParamsInt()
    {
        return $this->get(self::PARAMS_INT);
    }

    /**
     * Returns 'params_int' iterator
     *
     * @return \ArrayIterator
     */
    public function getParamsIntIterator()
    {
        return new \ArrayIterator($this->get(self::PARAMS_INT));
    }

    /**
     * Returns element from 'params_int' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getParamsIntAt($offset)
    {
        return $this->get(self::PARAMS_INT, $offset);
    }

    /**
     * Returns count of 'params_int' list
     *
     * @return int
     */
    public function getParamsIntCount()
    {
        return $this->count(self::PARAMS_INT);
    }
}
}