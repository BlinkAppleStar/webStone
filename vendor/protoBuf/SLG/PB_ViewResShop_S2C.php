<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ViewResShop_S2C message
 */
class PB_ViewResShop_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const SHOP_ITEM = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SHOP_ITEM => array(
            'name' => 'shop_item',
            'repeated' => true,
            'type' => '\PB_ShopItem'
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
        $this->values[self::SHOP_ITEM] = array();
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
     * Appends value to 'shop_item' list
     *
     * @param \PB_ShopItem $value Value to append
     *
     * @return null
     */
    public function appendShopItem(\PB_ShopItem $value)
    {
        return $this->append(self::SHOP_ITEM, $value);
    }

    /**
     * Clears 'shop_item' list
     *
     * @return null
     */
    public function clearShopItem()
    {
        return $this->clear(self::SHOP_ITEM);
    }

    /**
     * Returns 'shop_item' list
     *
     * @return \PB_ShopItem[]
     */
    public function getShopItem()
    {
        return $this->get(self::SHOP_ITEM);
    }

    /**
     * Returns 'shop_item' iterator
     *
     * @return \ArrayIterator
     */
    public function getShopItemIterator()
    {
        return new \ArrayIterator($this->get(self::SHOP_ITEM));
    }

    /**
     * Returns element from 'shop_item' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_ShopItem
     */
    public function getShopItemAt($offset)
    {
        return $this->get(self::SHOP_ITEM, $offset);
    }

    /**
     * Returns count of 'shop_item' list
     *
     * @return int
     */
    public function getShopItemCount()
    {
        return $this->count(self::SHOP_ITEM);
    }
}
}