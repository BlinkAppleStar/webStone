<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_BuySecretShop_S2C message
 */
class PB_BuySecretShop_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const COST_RES_TYPE = 1;
    const RES_NUM = 2;
    const ITEM_ID = 3;
    const ITEM_NUM = 4;
    const SHOP_RES_TYPE = 5;
    const SHOP_RES_NUM = 6;
    const SHOP_ITEM_INDEX = 7;
    const NEW_SHOP_ITEM_ID = 8;

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
        self::ITEM_ID => array(
            'name' => 'item_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEM_NUM => array(
            'name' => 'item_num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SHOP_RES_TYPE => array(
            'name' => 'shop_res_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SHOP_RES_NUM => array(
            'name' => 'shop_res_num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SHOP_ITEM_INDEX => array(
            'name' => 'shop_item_index',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEW_SHOP_ITEM_ID => array(
            'name' => 'new_shop_item_id',
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
        $this->values[self::ITEM_ID] = null;
        $this->values[self::ITEM_NUM] = null;
        $this->values[self::SHOP_RES_TYPE] = null;
        $this->values[self::SHOP_RES_NUM] = null;
        $this->values[self::SHOP_ITEM_INDEX] = null;
        $this->values[self::NEW_SHOP_ITEM_ID] = null;
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
     * Sets value of 'item_num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setItemNum($value)
    {
        return $this->set(self::ITEM_NUM, $value);
    }

    /**
     * Returns value of 'item_num' property
     *
     * @return integer
     */
    public function getItemNum()
    {
        $value = $this->get(self::ITEM_NUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'shop_res_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setShopResType($value)
    {
        return $this->set(self::SHOP_RES_TYPE, $value);
    }

    /**
     * Returns value of 'shop_res_type' property
     *
     * @return integer
     */
    public function getShopResType()
    {
        $value = $this->get(self::SHOP_RES_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'shop_res_num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setShopResNum($value)
    {
        return $this->set(self::SHOP_RES_NUM, $value);
    }

    /**
     * Returns value of 'shop_res_num' property
     *
     * @return integer
     */
    public function getShopResNum()
    {
        $value = $this->get(self::SHOP_RES_NUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'shop_item_index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setShopItemIndex($value)
    {
        return $this->set(self::SHOP_ITEM_INDEX, $value);
    }

    /**
     * Returns value of 'shop_item_index' property
     *
     * @return integer
     */
    public function getShopItemIndex()
    {
        $value = $this->get(self::SHOP_ITEM_INDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'new_shop_item_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewShopItemId($value)
    {
        return $this->set(self::NEW_SHOP_ITEM_ID, $value);
    }

    /**
     * Returns value of 'new_shop_item_id' property
     *
     * @return integer
     */
    public function getNewShopItemId()
    {
        $value = $this->get(self::NEW_SHOP_ITEM_ID);
        return $value === null ? (integer)$value : $value;
    }
}
}