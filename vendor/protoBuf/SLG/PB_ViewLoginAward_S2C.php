<?php
/**
 * Auto generated from Gamer.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ViewLoginAward_S2C message
 */
class PB_ViewLoginAward_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const COMBO = 1;
    const TAKE_INDEX = 2;
    const CAN_TAKE = 3;
    const ITEM_PARAMS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COMBO => array(
            'name' => 'combo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TAKE_INDEX => array(
            'name' => 'take_index',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CAN_TAKE => array(
            'name' => 'can_take',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ITEM_PARAMS => array(
            'name' => 'item_params',
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
        $this->values[self::COMBO] = null;
        $this->values[self::TAKE_INDEX] = null;
        $this->values[self::CAN_TAKE] = null;
        $this->values[self::ITEM_PARAMS] = array();
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
     * Sets value of 'combo' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCombo($value)
    {
        return $this->set(self::COMBO, $value);
    }

    /**
     * Returns value of 'combo' property
     *
     * @return integer
     */
    public function getCombo()
    {
        $value = $this->get(self::COMBO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'take_index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTakeIndex($value)
    {
        return $this->set(self::TAKE_INDEX, $value);
    }

    /**
     * Returns value of 'take_index' property
     *
     * @return integer
     */
    public function getTakeIndex()
    {
        $value = $this->get(self::TAKE_INDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'can_take' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setCanTake($value)
    {
        return $this->set(self::CAN_TAKE, $value);
    }

    /**
     * Returns value of 'can_take' property
     *
     * @return boolean
     */
    public function getCanTake()
    {
        $value = $this->get(self::CAN_TAKE);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Appends value to 'item_params' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendItemParams($value)
    {
        return $this->append(self::ITEM_PARAMS, $value);
    }

    /**
     * Clears 'item_params' list
     *
     * @return null
     */
    public function clearItemParams()
    {
        return $this->clear(self::ITEM_PARAMS);
    }

    /**
     * Returns 'item_params' list
     *
     * @return integer[]
     */
    public function getItemParams()
    {
        return $this->get(self::ITEM_PARAMS);
    }

    /**
     * Returns 'item_params' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemParamsIterator()
    {
        return new \ArrayIterator($this->get(self::ITEM_PARAMS));
    }

    /**
     * Returns element from 'item_params' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getItemParamsAt($offset)
    {
        return $this->get(self::ITEM_PARAMS, $offset);
    }

    /**
     * Returns count of 'item_params' list
     *
     * @return int
     */
    public function getItemParamsCount()
    {
        return $this->count(self::ITEM_PARAMS);
    }
}
}