<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ViewLeagueGiftBag_S2C message
 */
class PB_ViewLeagueGiftBag_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const GIFT_BAGS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GIFT_BAGS => array(
            'name' => 'gift_bags',
            'repeated' => true,
            'type' => '\PB_LeagueGiftBag'
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
        $this->values[self::GIFT_BAGS] = array();
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
     * Appends value to 'gift_bags' list
     *
     * @param \PB_LeagueGiftBag $value Value to append
     *
     * @return null
     */
    public function appendGiftBags(\PB_LeagueGiftBag $value)
    {
        return $this->append(self::GIFT_BAGS, $value);
    }

    /**
     * Clears 'gift_bags' list
     *
     * @return null
     */
    public function clearGiftBags()
    {
        return $this->clear(self::GIFT_BAGS);
    }

    /**
     * Returns 'gift_bags' list
     *
     * @return \PB_LeagueGiftBag[]
     */
    public function getGiftBags()
    {
        return $this->get(self::GIFT_BAGS);
    }

    /**
     * Returns 'gift_bags' iterator
     *
     * @return \ArrayIterator
     */
    public function getGiftBagsIterator()
    {
        return new \ArrayIterator($this->get(self::GIFT_BAGS));
    }

    /**
     * Returns element from 'gift_bags' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_LeagueGiftBag
     */
    public function getGiftBagsAt($offset)
    {
        return $this->get(self::GIFT_BAGS, $offset);
    }

    /**
     * Returns count of 'gift_bags' list
     *
     * @return int
     */
    public function getGiftBagsCount()
    {
        return $this->count(self::GIFT_BAGS);
    }
}
}