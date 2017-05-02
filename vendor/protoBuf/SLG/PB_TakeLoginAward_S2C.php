<?php
/**
 * Auto generated from Gamer.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_TakeLoginAward_S2C message
 */
class PB_TakeLoginAward_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const COMBO = 1;
    const ITEM_ID = 2;
    const ITEM_NUM = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COMBO => array(
            'name' => 'combo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEM_ID => array(
            'name' => 'item_id',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEM_NUM => array(
            'name' => 'item_num',
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
        $this->values[self::ITEM_ID] = array();
        $this->values[self::ITEM_NUM] = array();
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
     * Appends value to 'item_id' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendItemId($value)
    {
        return $this->append(self::ITEM_ID, $value);
    }

    /**
     * Clears 'item_id' list
     *
     * @return null
     */
    public function clearItemId()
    {
        return $this->clear(self::ITEM_ID);
    }

    /**
     * Returns 'item_id' list
     *
     * @return integer[]
     */
    public function getItemId()
    {
        return $this->get(self::ITEM_ID);
    }

    /**
     * Returns 'item_id' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemIdIterator()
    {
        return new \ArrayIterator($this->get(self::ITEM_ID));
    }

    /**
     * Returns element from 'item_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getItemIdAt($offset)
    {
        return $this->get(self::ITEM_ID, $offset);
    }

    /**
     * Returns count of 'item_id' list
     *
     * @return int
     */
    public function getItemIdCount()
    {
        return $this->count(self::ITEM_ID);
    }

    /**
     * Appends value to 'item_num' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendItemNum($value)
    {
        return $this->append(self::ITEM_NUM, $value);
    }

    /**
     * Clears 'item_num' list
     *
     * @return null
     */
    public function clearItemNum()
    {
        return $this->clear(self::ITEM_NUM);
    }

    /**
     * Returns 'item_num' list
     *
     * @return integer[]
     */
    public function getItemNum()
    {
        return $this->get(self::ITEM_NUM);
    }

    /**
     * Returns 'item_num' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemNumIterator()
    {
        return new \ArrayIterator($this->get(self::ITEM_NUM));
    }

    /**
     * Returns element from 'item_num' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getItemNumAt($offset)
    {
        return $this->get(self::ITEM_NUM, $offset);
    }

    /**
     * Returns count of 'item_num' list
     *
     * @return int
     */
    public function getItemNumCount()
    {
        return $this->count(self::ITEM_NUM);
    }
}
}