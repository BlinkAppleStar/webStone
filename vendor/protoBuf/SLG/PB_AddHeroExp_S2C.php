<?php
/**
 * Auto generated from Hero.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_AddHeroExp_S2C message
 */
class PB_AddHeroExp_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const DEL_HERO_ID = 2;
    const NEW_HERO = 3;
    const ITEMS = 4;
    const RMB = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEL_HERO_ID => array(
            'name' => 'del_hero_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEW_HERO => array(
            'name' => 'new_hero',
            'required' => false,
            'type' => '\PB_Hero'
        ),
        self::ITEMS => array(
            'name' => 'items',
            'repeated' => true,
            'type' => '\PB_Item'
        ),
        self::RMB => array(
            'name' => 'rmb',
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
        $this->values[self::DEL_HERO_ID] = null;
        $this->values[self::NEW_HERO] = null;
        $this->values[self::ITEMS] = array();
        $this->values[self::RMB] = null;
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
     * Sets value of 'del_hero_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDelHeroId($value)
    {
        return $this->set(self::DEL_HERO_ID, $value);
    }

    /**
     * Returns value of 'del_hero_id' property
     *
     * @return integer
     */
    public function getDelHeroId()
    {
        $value = $this->get(self::DEL_HERO_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'new_hero' property
     *
     * @param \PB_Hero $value Property value
     *
     * @return null
     */
    public function setNewHero(\PB_Hero $value=null)
    {
        return $this->set(self::NEW_HERO, $value);
    }

    /**
     * Returns value of 'new_hero' property
     *
     * @return \PB_Hero
     */
    public function getNewHero()
    {
        return $this->get(self::NEW_HERO);
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
}
}