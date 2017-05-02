<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_BuyLeagueShop_C2S message
 */
class PB_BuyLeagueShop_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const SHOP_ITEM_ID = 2;
    const NUM = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SHOP_ITEM_ID => array(
            'name' => 'shop_item_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NUM => array(
            'name' => 'num',
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
        $this->values[self::ID] = null;
        $this->values[self::SHOP_ITEM_ID] = null;
        $this->values[self::NUM] = null;
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
     * Sets value of 'shop_item_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setShopItemId($value)
    {
        return $this->set(self::SHOP_ITEM_ID, $value);
    }

    /**
     * Returns value of 'shop_item_id' property
     *
     * @return integer
     */
    public function getShopItemId()
    {
        $value = $this->get(self::SHOP_ITEM_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNum($value)
    {
        return $this->set(self::NUM, $value);
    }

    /**
     * Returns value of 'num' property
     *
     * @return integer
     */
    public function getNum()
    {
        $value = $this->get(self::NUM);
        return $value === null ? (integer)$value : $value;
    }
}
}