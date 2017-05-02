<?php
/**
 * Auto generated from Quest.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_TakeDailyAward_S2C message
 */
class PB_TakeDailyAward_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const ITEMS = 1;
    const AWARD_IDS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ITEMS => array(
            'name' => 'items',
            'repeated' => true,
            'type' => '\PB_Item'
        ),
        self::AWARD_IDS => array(
            'name' => 'award_ids',
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
        $this->values[self::ITEMS] = array();
        $this->values[self::AWARD_IDS] = array();
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
     * Appends value to 'award_ids' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendAwardIds($value)
    {
        return $this->append(self::AWARD_IDS, $value);
    }

    /**
     * Clears 'award_ids' list
     *
     * @return null
     */
    public function clearAwardIds()
    {
        return $this->clear(self::AWARD_IDS);
    }

    /**
     * Returns 'award_ids' list
     *
     * @return integer[]
     */
    public function getAwardIds()
    {
        return $this->get(self::AWARD_IDS);
    }

    /**
     * Returns 'award_ids' iterator
     *
     * @return \ArrayIterator
     */
    public function getAwardIdsIterator()
    {
        return new \ArrayIterator($this->get(self::AWARD_IDS));
    }

    /**
     * Returns element from 'award_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getAwardIdsAt($offset)
    {
        return $this->get(self::AWARD_IDS, $offset);
    }

    /**
     * Returns count of 'award_ids' list
     *
     * @return int
     */
    public function getAwardIdsCount()
    {
        return $this->count(self::AWARD_IDS);
    }
}
}