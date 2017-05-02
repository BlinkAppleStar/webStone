<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LeagueGetGiftBonus_S2C message
 */
class PB_LeagueGetGiftBonus_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const GIFT_BAG_ID = 1;
    const ITEMS = 2;
    const PACK_ID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GIFT_BAG_ID => array(
            'name' => 'gift_bag_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEMS => array(
            'name' => 'items',
            'repeated' => true,
            'type' => '\PB_Item'
        ),
        self::PACK_ID => array(
            'name' => 'pack_id',
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
        $this->values[self::GIFT_BAG_ID] = null;
        $this->values[self::ITEMS] = array();
        $this->values[self::PACK_ID] = null;
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
     * Sets value of 'gift_bag_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGiftBagId($value)
    {
        return $this->set(self::GIFT_BAG_ID, $value);
    }

    /**
     * Returns value of 'gift_bag_id' property
     *
     * @return integer
     */
    public function getGiftBagId()
    {
        $value = $this->get(self::GIFT_BAG_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'items' list
     *
     * @param \PB_Item $value Value to append
     *
     * @return null
     */
    public function appendItems(\PB_Item $value)
    {
        return $this->append(self::ITEMS, $value);
    }

    /**
     * Clears 'items' list
     *
     * @return null
     */
    public function clearItems()
    {
        return $this->clear(self::ITEMS);
    }

    /**
     * Returns 'items' list
     *
     * @return \PB_Item[]
     */
    public function getItems()
    {
        return $this->get(self::ITEMS);
    }

    /**
     * Returns 'items' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemsIterator()
    {
        return new \ArrayIterator($this->get(self::ITEMS));
    }

    /**
     * Returns element from 'items' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Item
     */
    public function getItemsAt($offset)
    {
        return $this->get(self::ITEMS, $offset);
    }

    /**
     * Returns count of 'items' list
     *
     * @return int
     */
    public function getItemsCount()
    {
        return $this->count(self::ITEMS);
    }

    /**
     * Sets value of 'pack_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPackId($value)
    {
        return $this->set(self::PACK_ID, $value);
    }

    /**
     * Returns value of 'pack_id' property
     *
     * @return integer
     */
    public function getPackId()
    {
        $value = $this->get(self::PACK_ID);
        return $value === null ? (integer)$value : $value;
    }
}
}