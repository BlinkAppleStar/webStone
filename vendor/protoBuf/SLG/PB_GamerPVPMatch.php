<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerPVPMatch message
 */
class PB_GamerPVPMatch extends \ProtobufMessage
{
    /* Field index constants */
    const GAMER = 1;
    const SOLDIER = 2;
    const PVPPOS = 3;
    const TYPE = 4;
    const MAPID = 5;
    const CARD = 6;
    const ROOM = 7;
    const INVITE = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAMER => array(
            'name' => 'gamer',
            'required' => false,
            'type' => '\PB_Gamer'
        ),
        self::SOLDIER => array(
            'name' => 'soldier',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PVPPOS => array(
            'name' => 'pvppos',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAPID => array(
            'name' => 'mapid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CARD => array(
            'name' => 'card',
            'repeated' => true,
            'type' => '\PB_CardMini'
        ),
        self::ROOM => array(
            'name' => 'room',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INVITE => array(
            'name' => 'invite',
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
        $this->values[self::GAMER] = null;
        $this->values[self::SOLDIER] = null;
        $this->values[self::PVPPOS] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::MAPID] = null;
        $this->values[self::CARD] = array();
        $this->values[self::ROOM] = null;
        $this->values[self::INVITE] = null;
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
     * Sets value of 'gamer' property
     *
     * @param \PB_Gamer $value Property value
     *
     * @return null
     */
    public function setGamer(\PB_Gamer $value=null)
    {
        return $this->set(self::GAMER, $value);
    }

    /**
     * Returns value of 'gamer' property
     *
     * @return \PB_Gamer
     */
    public function getGamer()
    {
        return $this->get(self::GAMER);
    }

    /**
     * Sets value of 'soldier' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSoldier($value)
    {
        return $this->set(self::SOLDIER, $value);
    }

    /**
     * Returns value of 'soldier' property
     *
     * @return integer
     */
    public function getSoldier()
    {
        $value = $this->get(self::SOLDIER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'pvppos' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPvppos($value)
    {
        return $this->set(self::PVPPOS, $value);
    }

    /**
     * Returns value of 'pvppos' property
     *
     * @return integer
     */
    public function getPvppos()
    {
        $value = $this->get(self::PVPPOS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'mapid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMapid($value)
    {
        return $this->set(self::MAPID, $value);
    }

    /**
     * Returns value of 'mapid' property
     *
     * @return integer
     */
    public function getMapid()
    {
        $value = $this->get(self::MAPID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'card' list
     *
     * @param \PB_CardMini $value Value to append
     *
     * @return null
     */
    public function appendCard(\PB_CardMini $value)
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
     * @return \PB_CardMini[]
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
     * @return \PB_CardMini
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
     * Sets value of 'room' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoom($value)
    {
        return $this->set(self::ROOM, $value);
    }

    /**
     * Returns value of 'room' property
     *
     * @return integer
     */
    public function getRoom()
    {
        $value = $this->get(self::ROOM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'invite' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInvite($value)
    {
        return $this->set(self::INVITE, $value);
    }

    /**
     * Returns value of 'invite' property
     *
     * @return integer
     */
    public function getInvite()
    {
        $value = $this->get(self::INVITE);
        return $value === null ? (integer)$value : $value;
    }
}
}