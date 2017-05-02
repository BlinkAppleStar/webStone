<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ViewSecretShop_S2C message
 */
class PB_ViewSecretShop_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const SPECIAL_ITEM_ID = 1;
    const SHOP_ITEM_ID = 2;
    const REFRESH_TIMES = 3;
    const CHANGE_TIME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SPECIAL_ITEM_ID => array(
            'name' => 'special_item_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SHOP_ITEM_ID => array(
            'name' => 'shop_item_id',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REFRESH_TIMES => array(
            'name' => 'refresh_times',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHANGE_TIME => array(
            'name' => 'change_time',
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
        $this->values[self::SPECIAL_ITEM_ID] = null;
        $this->values[self::SHOP_ITEM_ID] = array();
        $this->values[self::REFRESH_TIMES] = null;
        $this->values[self::CHANGE_TIME] = null;
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
     * Sets value of 'special_item_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSpecialItemId($value)
    {
        return $this->set(self::SPECIAL_ITEM_ID, $value);
    }

    /**
     * Returns value of 'special_item_id' property
     *
     * @return integer
     */
    public function getSpecialItemId()
    {
        $value = $this->get(self::SPECIAL_ITEM_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'shop_item_id' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendShopItemId($value)
    {
        return $this->append(self::SHOP_ITEM_ID, $value);
    }

    /**
     * Clears 'shop_item_id' list
     *
     * @return null
     */
    public function clearShopItemId()
    {
        return $this->clear(self::SHOP_ITEM_ID);
    }

    /**
     * Returns 'shop_item_id' list
     *
     * @return integer[]
     */
    public function getShopItemId()
    {
        return $this->get(self::SHOP_ITEM_ID);
    }

    /**
     * Returns 'shop_item_id' iterator
     *
     * @return \ArrayIterator
     */
    public function getShopItemIdIterator()
    {
        return new \ArrayIterator($this->get(self::SHOP_ITEM_ID));
    }

    /**
     * Returns element from 'shop_item_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getShopItemIdAt($offset)
    {
        return $this->get(self::SHOP_ITEM_ID, $offset);
    }

    /**
     * Returns count of 'shop_item_id' list
     *
     * @return int
     */
    public function getShopItemIdCount()
    {
        return $this->count(self::SHOP_ITEM_ID);
    }

    /**
     * Sets value of 'refresh_times' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRefreshTimes($value)
    {
        return $this->set(self::REFRESH_TIMES, $value);
    }

    /**
     * Returns value of 'refresh_times' property
     *
     * @return integer
     */
    public function getRefreshTimes()
    {
        $value = $this->get(self::REFRESH_TIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'change_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChangeTime($value)
    {
        return $this->set(self::CHANGE_TIME, $value);
    }

    /**
     * Returns value of 'change_time' property
     *
     * @return integer
     */
    public function getChangeTime()
    {
        $value = $this->get(self::CHANGE_TIME);
        return $value === null ? (integer)$value : $value;
    }
}
}