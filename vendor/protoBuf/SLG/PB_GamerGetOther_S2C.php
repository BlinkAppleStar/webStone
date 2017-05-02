<?php
/**
 * Auto generated from GamerFriends.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetOther_S2C message
 */
class PB_GamerGetOther_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const MAIN = 1;
    const SOLDIER = 2;
    const BUILD = 3;
    const CARD = 4;
    const CARDGROUP = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MAIN => array(
            'name' => 'main',
            'required' => false,
            'type' => '\PB_Gamer'
        ),
        self::SOLDIER => array(
            'name' => 'soldier',
            'repeated' => true,
            'type' => '\PB_Soldier'
        ),
        self::BUILD => array(
            'name' => 'build',
            'repeated' => true,
            'type' => '\PB_Build'
        ),
        self::CARD => array(
            'name' => 'card',
            'repeated' => true,
            'type' => '\PB_Card'
        ),
        self::CARDGROUP => array(
            'name' => 'cardgroup',
            'repeated' => true,
            'type' => '\PB_CardGroup'
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
        $this->values[self::MAIN] = null;
        $this->values[self::SOLDIER] = array();
        $this->values[self::BUILD] = array();
        $this->values[self::CARD] = array();
        $this->values[self::CARDGROUP] = array();
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
     * Sets value of 'main' property
     *
     * @param \PB_Gamer $value Property value
     *
     * @return null
     */
    public function setMain(\PB_Gamer $value=null)
    {
        return $this->set(self::MAIN, $value);
    }

    /**
     * Returns value of 'main' property
     *
     * @return \PB_Gamer
     */
    public function getMain()
    {
        return $this->get(self::MAIN);
    }

    /**
     * Appends value to 'soldier' list
     *
     * @param \PB_Soldier $value Value to append
     *
     * @return null
     */
    public function appendSoldier(\PB_Soldier $value)
    {
        return $this->append(self::SOLDIER, $value);
    }

    /**
     * Clears 'soldier' list
     *
     * @return null
     */
    public function clearSoldier()
    {
        return $this->clear(self::SOLDIER);
    }

    /**
     * Returns 'soldier' list
     *
     * @return \PB_Soldier[]
     */
    public function getSoldier()
    {
        return $this->get(self::SOLDIER);
    }

    /**
     * Returns 'soldier' iterator
     *
     * @return \ArrayIterator
     */
    public function getSoldierIterator()
    {
        return new \ArrayIterator($this->get(self::SOLDIER));
    }

    /**
     * Returns element from 'soldier' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Soldier
     */
    public function getSoldierAt($offset)
    {
        return $this->get(self::SOLDIER, $offset);
    }

    /**
     * Returns count of 'soldier' list
     *
     * @return int
     */
    public function getSoldierCount()
    {
        return $this->count(self::SOLDIER);
    }

    /**
     * Appends value to 'build' list
     *
     * @param \PB_Build $value Value to append
     *
     * @return null
     */
    public function appendBuild(\PB_Build $value)
    {
        return $this->append(self::BUILD, $value);
    }

    /**
     * Clears 'build' list
     *
     * @return null
     */
    public function clearBuild()
    {
        return $this->clear(self::BUILD);
    }

    /**
     * Returns 'build' list
     *
     * @return \PB_Build[]
     */
    public function getBuild()
    {
        return $this->get(self::BUILD);
    }

    /**
     * Returns 'build' iterator
     *
     * @return \ArrayIterator
     */
    public function getBuildIterator()
    {
        return new \ArrayIterator($this->get(self::BUILD));
    }

    /**
     * Returns element from 'build' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Build
     */
    public function getBuildAt($offset)
    {
        return $this->get(self::BUILD, $offset);
    }

    /**
     * Returns count of 'build' list
     *
     * @return int
     */
    public function getBuildCount()
    {
        return $this->count(self::BUILD);
    }

    /**
     * Appends value to 'card' list
     *
     * @param \PB_Card $value Value to append
     *
     * @return null
     */
    public function appendCard(\PB_Card $value)
    {
        return $this->append(self::CARD, $value);
    }

    /**
     * Clears 'card' list
     *
     * @return null
     */
    public function clearCard()
    {
        return $this->clear(self::CARD);
    }

    /**
     * Returns 'card' list
     *
     * @return \PB_Card[]
     */
    public function getCard()
    {
        return $this->get(self::CARD);
    }

    /**
     * Returns 'card' iterator
     *
     * @return \ArrayIterator
     */
    public function getCardIterator()
    {
        return new \ArrayIterator($this->get(self::CARD));
    }

    /**
     * Returns element from 'card' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Card
     */
    public function getCardAt($offset)
    {
        return $this->get(self::CARD, $offset);
    }

    /**
     * Returns count of 'card' list
     *
     * @return int
     */
    public function getCardCount()
    {
        return $this->count(self::CARD);
    }

    /**
     * Appends value to 'cardgroup' list
     *
     * @param \PB_CardGroup $value Value to append
     *
     * @return null
     */
    public function appendCardgroup(\PB_CardGroup $value)
    {
        return $this->append(self::CARDGROUP, $value);
    }

    /**
     * Clears 'cardgroup' list
     *
     * @return null
     */
    public function clearCardgroup()
    {
        return $this->clear(self::CARDGROUP);
    }

    /**
     * Returns 'cardgroup' list
     *
     * @return \PB_CardGroup[]
     */
    public function getCardgroup()
    {
        return $this->get(self::CARDGROUP);
    }

    /**
     * Returns 'cardgroup' iterator
     *
     * @return \ArrayIterator
     */
    public function getCardgroupIterator()
    {
        return new \ArrayIterator($this->get(self::CARDGROUP));
    }

    /**
     * Returns element from 'cardgroup' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_CardGroup
     */
    public function getCardgroupAt($offset)
    {
        return $this->get(self::CARDGROUP, $offset);
    }

    /**
     * Returns count of 'cardgroup' list
     *
     * @return int
     */
    public function getCardgroupCount()
    {
        return $this->count(self::CARDGROUP);
    }
}
}