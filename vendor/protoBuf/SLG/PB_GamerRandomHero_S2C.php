<?php
/**
 * Auto generated from Hero.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerRandomHero_S2C message
 */
class PB_GamerRandomHero_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const ITEMS = 2;
    const HEROES = 3;
    const RMB = 4;
    const FREE_TIMES = 5;
    const REFRESH_TIME = 6;
    const REAL_ITEMS = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEMS => array(
            'name' => 'items',
            'repeated' => true,
            'type' => '\PB_Item'
        ),
        self::HEROES => array(
            'name' => 'heroes',
            'repeated' => true,
            'type' => '\PB_Hero'
        ),
        self::RMB => array(
            'name' => 'rmb',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FREE_TIMES => array(
            'name' => 'free_times',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REFRESH_TIME => array(
            'name' => 'refresh_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REAL_ITEMS => array(
            'name' => 'real_items',
            'repeated' => true,
            'type' => '\PB_Item'
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
        $this->values[self::ITEMS] = array();
        $this->values[self::HEROES] = array();
        $this->values[self::RMB] = null;
        $this->values[self::FREE_TIMES] = null;
        $this->values[self::REFRESH_TIME] = null;
        $this->values[self::REAL_ITEMS] = array();
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
     * Appends value to 'heroes' list
     *
     * @param \PB_Hero $value Value to append
     *
     * @return null
     */
    public function appendHeroes(\PB_Hero $value)
    {
        return $this->append(self::HEROES, $value);
    }

    /**
     * Clears 'heroes' list
     *
     * @return null
     */
    public function clearHeroes()
    {
        return $this->clear(self::HEROES);
    }

    /**
     * Returns 'heroes' list
     *
     * @return \PB_Hero[]
     */
    public function getHeroes()
    {
        return $this->get(self::HEROES);
    }

    /**
     * Returns 'heroes' iterator
     *
     * @return \ArrayIterator
     */
    public function getHeroesIterator()
    {
        return new \ArrayIterator($this->get(self::HEROES));
    }

    /**
     * Returns element from 'heroes' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Hero
     */
    public function getHeroesAt($offset)
    {
        return $this->get(self::HEROES, $offset);
    }

    /**
     * Returns count of 'heroes' list
     *
     * @return int
     */
    public function getHeroesCount()
    {
        return $this->count(self::HEROES);
    }

    /**
     * Sets value of 'rmb' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRmb($value)
    {
        return $this->set(self::RMB, $value);
    }

    /**
     * Returns value of 'rmb' property
     *
     * @return integer
     */
    public function getRmb()
    {
        $value = $this->get(self::RMB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'free_times' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFreeTimes($value)
    {
        return $this->set(self::FREE_TIMES, $value);
    }

    /**
     * Returns value of 'free_times' property
     *
     * @return integer
     */
    public function getFreeTimes()
    {
        $value = $this->get(self::FREE_TIMES);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'refresh_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRefreshTime($value)
    {
        return $this->set(self::REFRESH_TIME, $value);
    }

    /**
     * Returns value of 'refresh_time' property
     *
     * @return integer
     */
    public function getRefreshTime()
    {
        $value = $this->get(self::REFRESH_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'real_items' list
     *
     * @param \PB_Item $value Value to append
     *
     * @return null
     */
    public function appendRealItems(\PB_Item $value)
    {
        return $this->append(self::REAL_ITEMS, $value);
    }

    /**
     * Clears 'real_items' list
     *
     * @return null
     */
    public function clearRealItems()
    {
        return $this->clear(self::REAL_ITEMS);
    }

    /**
     * Returns 'real_items' list
     *
     * @return \PB_Item[]
     */
    public function getRealItems()
    {
        return $this->get(self::REAL_ITEMS);
    }

    /**
     * Returns 'real_items' iterator
     *
     * @return \ArrayIterator
     */
    public function getRealItemsIterator()
    {
        return new \ArrayIterator($this->get(self::REAL_ITEMS));
    }

    /**
     * Returns element from 'real_items' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Item
     */
    public function getRealItemsAt($offset)
    {
        return $this->get(self::REAL_ITEMS, $offset);
    }

    /**
     * Returns count of 'real_items' list
     *
     * @return int
     */
    public function getRealItemsCount()
    {
        return $this->count(self::REAL_ITEMS);
    }
}
}