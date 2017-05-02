<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_RefreshSecretShop_S2C message
 */
class PB_RefreshSecretShop_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const COST_RES_TYPE = 1;
    const RES_NUM = 2;
    const SHOP_ITEM_ID = 3;
    const REFRESH_TIMES = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COST_RES_TYPE => array(
            'name' => 'cost_res_type',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RES_NUM => array(
            'name' => 'res_num',
            'repeated' => true,
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
        $this->values[self::RES_NUM] = array();
        $this->values[self::SHOP_ITEM_ID] = array();
        $this->values[self::REFRESH_TIMES] = null;
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
     * Appends value to 'res_num' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendResNum($value)
    {
        return $this->append(self::RES_NUM, $value);
    }

    /**
     * Clears 'res_num' list
     *
     * @return null
     */
    public function clearResNum()
    {
        return $this->clear(self::RES_NUM);
    }

    /**
     * Returns 'res_num' list
     *
     * @return integer[]
     */
    public function getResNum()
    {
        return $this->get(self::RES_NUM);
    }

    /**
     * Returns 'res_num' iterator
     *
     * @return \ArrayIterator
     */
    public function getResNumIterator()
    {
        return new \ArrayIterator($this->get(self::RES_NUM));
    }

    /**
     * Returns element from 'res_num' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getResNumAt($offset)
    {
        return $this->get(self::RES_NUM, $offset);
    }

    /**
     * Returns count of 'res_num' list
     *
     * @return int
     */
    public function getResNumCount()
    {
        return $this->count(self::RES_NUM);
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
}
}