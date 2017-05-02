<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerPVPMatch_C2S message
 */
class PB_GamerPVPMatch_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const TYPE = 2;
    const MAPID = 3;
    const CARDGROUP = 4;
    const FRIENDS = 5;
    const ROOM = 6;
    const INVITE = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
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
        self::CARDGROUP => array(
            'name' => 'cardgroup',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDS => array(
            'name' => 'friends',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::ID] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::MAPID] = null;
        $this->values[self::CARDGROUP] = null;
        $this->values[self::FRIENDS] = array();
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
     * Sets value of 'cardgroup' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCardgroup($value)
    {
        return $this->set(self::CARDGROUP, $value);
    }

    /**
     * Returns value of 'cardgroup' property
     *
     * @return integer
     */
    public function getCardgroup()
    {
        $value = $this->get(self::CARDGROUP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'friends' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendFriends($value)
    {
        return $this->append(self::FRIENDS, $value);
    }

    /**
     * Clears 'friends' list
     *
     * @return null
     */
    public function clearFriends()
    {
        return $this->clear(self::FRIENDS);
    }

    /**
     * Returns 'friends' list
     *
     * @return integer[]
     */
    public function getFriends()
    {
        return $this->get(self::FRIENDS);
    }

    /**
     * Returns 'friends' iterator
     *
     * @return \ArrayIterator
     */
    public function getFriendsIterator()
    {
        return new \ArrayIterator($this->get(self::FRIENDS));
    }

    /**
     * Returns element from 'friends' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getFriendsAt($offset)
    {
        return $this->get(self::FRIENDS, $offset);
    }

    /**
     * Returns count of 'friends' list
     *
     * @return int
     */
    public function getFriendsCount()
    {
        return $this->count(self::FRIENDS);
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