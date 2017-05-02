<?php
/**
 * Auto generated from Bag.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerUseItem_S2C message
 */
class PB_GamerUseItem_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const ITEM_ID = 1;
    const ITEM_COUNT = 2;
    const RES_TYPES = 3;
    const RES_VALUES = 4;
    const USE_TYPE = 5;
    const TARGET_ID = 6;
    const TIME = 7;
    const TIME_EFFECT = 8;
    const DROP_ITEMS = 9;
    const GAMER = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ITEM_ID => array(
            'name' => 'item_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEM_COUNT => array(
            'name' => 'item_count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RES_TYPES => array(
            'name' => 'res_types',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RES_VALUES => array(
            'name' => 'res_values',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USE_TYPE => array(
            'name' => 'use_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TARGET_ID => array(
            'name' => 'target_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIME_EFFECT => array(
            'name' => 'time_effect',
            'repeated' => true,
            'type' => '\PB_TimeEffectList'
        ),
        self::DROP_ITEMS => array(
            'name' => 'drop_items',
            'repeated' => true,
            'type' => '\PB_Item'
        ),
        self::GAMER => array(
            'name' => 'gamer',
            'required' => false,
            'type' => '\PB_Gamer'
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
        $this->values[self::ITEM_ID] = null;
        $this->values[self::ITEM_COUNT] = null;
        $this->values[self::RES_TYPES] = array();
        $this->values[self::RES_VALUES] = array();
        $this->values[self::USE_TYPE] = null;
        $this->values[self::TARGET_ID] = null;
        $this->values[self::TIME] = null;
        $this->values[self::TIME_EFFECT] = array();
        $this->values[self::DROP_ITEMS] = array();
        $this->values[self::GAMER] = null;
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
     * Sets value of 'item_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setItemId($value)
    {
        return $this->set(self::ITEM_ID, $value);
    }

    /**
     * Returns value of 'item_id' property
     *
     * @return integer
     */
    public function getItemId()
    {
        $value = $this->get(self::ITEM_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'item_count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setItemCount($value)
    {
        return $this->set(self::ITEM_COUNT, $value);
    }

    /**
     * Returns value of 'item_count' property
     *
     * @return integer
     */
    public function getItemCount()
    {
        $value = $this->get(self::ITEM_COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'res_types' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendResTypes($value)
    {
        return $this->append(self::RES_TYPES, $value);
    }

    /**
     * Clears 'res_types' list
     *
     * @return null
     */
    public function clearResTypes()
    {
        return $this->clear(self::RES_TYPES);
    }

    /**
     * Returns 'res_types' list
     *
     * @return integer[]
     */
    public function getResTypes()
    {
        return $this->get(self::RES_TYPES);
    }

    /**
     * Returns 'res_types' iterator
     *
     * @return \ArrayIterator
     */
    public function getResTypesIterator()
    {
        return new \ArrayIterator($this->get(self::RES_TYPES));
    }

    /**
     * Returns element from 'res_types' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getResTypesAt($offset)
    {
        return $this->get(self::RES_TYPES, $offset);
    }

    /**
     * Returns count of 'res_types' list
     *
     * @return int
     */
    public function getResTypesCount()
    {
        return $this->count(self::RES_TYPES);
    }

    /**
     * Appends value to 'res_values' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendResValues($value)
    {
        return $this->append(self::RES_VALUES, $value);
    }

    /**
     * Clears 'res_values' list
     *
     * @return null
     */
    public function clearResValues()
    {
        return $this->clear(self::RES_VALUES);
    }

    /**
     * Returns 'res_values' list
     *
     * @return integer[]
     */
    public function getResValues()
    {
        return $this->get(self::RES_VALUES);
    }

    /**
     * Returns 'res_values' iterator
     *
     * @return \ArrayIterator
     */
    public function getResValuesIterator()
    {
        return new \ArrayIterator($this->get(self::RES_VALUES));
    }

    /**
     * Returns element from 'res_values' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getResValuesAt($offset)
    {
        return $this->get(self::RES_VALUES, $offset);
    }

    /**
     * Returns count of 'res_values' list
     *
     * @return int
     */
    public function getResValuesCount()
    {
        return $this->count(self::RES_VALUES);
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
     * Sets value of 'target_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTargetId($value)
    {
        return $this->set(self::TARGET_ID, $value);
    }

    /**
     * Returns value of 'target_id' property
     *
     * @return integer
     */
    public function getTargetId()
    {
        $value = $this->get(self::TARGET_ID);
        return $value === null ? (integer)$value : $value;
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

    /**
     * Appends value to 'time_effect' list
     *
     * @param \PB_TimeEffectList $value Value to append
     *
     * @return null
     */
    public function appendTimeEffect(\PB_TimeEffectList $value)
    {
        return $this->append(self::TIME_EFFECT, $value);
    }

    /**
     * Clears 'time_effect' list
     *
     * @return null
     */
    public function clearTimeEffect()
    {
        return $this->clear(self::TIME_EFFECT);
    }

    /**
     * Returns 'time_effect' list
     *
     * @return \PB_TimeEffectList[]
     */
    public function getTimeEffect()
    {
        return $this->get(self::TIME_EFFECT);
    }

    /**
     * Returns 'time_effect' iterator
     *
     * @return \ArrayIterator
     */
    public function getTimeEffectIterator()
    {
        return new \ArrayIterator($this->get(self::TIME_EFFECT));
    }

    /**
     * Returns element from 'time_effect' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_TimeEffectList
     */
    public function getTimeEffectAt($offset)
    {
        return $this->get(self::TIME_EFFECT, $offset);
    }

    /**
     * Returns count of 'time_effect' list
     *
     * @return int
     */
    public function getTimeEffectCount()
    {
        return $this->count(self::TIME_EFFECT);
    }

    /**
     * Appends value to 'drop_items' list
     *
     * @param \PB_Item $value Value to append
     *
     * @return null
     */
    public function appendDropItems(\PB_Item $value)
    {
        return $this->append(self::DROP_ITEMS, $value);
    }

    /**
     * Clears 'drop_items' list
     *
     * @return null
     */
    public function clearDropItems()
    {
        return $this->clear(self::DROP_ITEMS);
    }

    /**
     * Returns 'drop_items' list
     *
     * @return \PB_Item[]
     */
    public function getDropItems()
    {
        return $this->get(self::DROP_ITEMS);
    }

    /**
     * Returns 'drop_items' iterator
     *
     * @return \ArrayIterator
     */
    public function getDropItemsIterator()
    {
        return new \ArrayIterator($this->get(self::DROP_ITEMS));
    }

    /**
     * Returns element from 'drop_items' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Item
     */
    public function getDropItemsAt($offset)
    {
        return $this->get(self::DROP_ITEMS, $offset);
    }

    /**
     * Returns count of 'drop_items' list
     *
     * @return int
     */
    public function getDropItemsCount()
    {
        return $this->count(self::DROP_ITEMS);
    }

    /**
     * Sets value of 'gamer' property
     *
     * @param \PB_Gamer $value Property value
     *
     * @return null
     */
    public function setGamer(\PB_Gamer $value=null)
    {
        return $this->set(self::GAMER, $value);
    }

    /**
     * Returns value of 'gamer' property
     *
     * @return \PB_Gamer
     */
    public function getGamer()
    {
        return $this->get(self::GAMER);
    }
}
}