<?php
/**
 * Auto generated from GamerFriends.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerDelFriend_C2S message
 */
class PB_GamerDelFriend_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const FRIEND = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIEND => array(
            'name' => 'friend',
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
        $this->values[self::FRIEND] = null;
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
     * Sets value of 'friend' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriend($value)
    {
        return $this->set(self::FRIEND, $value);
    }

    /**
     * Returns value of 'friend' property
     *
     * @return integer
     */
    public function getFriend()
    {
        $value = $this->get(self::FRIEND);
        return $value === null ? (integer)$value : $value;
    }
}
}