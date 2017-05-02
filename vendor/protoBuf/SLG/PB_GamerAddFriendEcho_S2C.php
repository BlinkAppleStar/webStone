<?php
/**
 * Auto generated from GamerFriends.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerAddFriendEcho_S2C message
 */
class PB_GamerAddFriendEcho_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const GAMER = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAMER => array(
            'name' => 'gamer',
            'required' => false,
            'type' => '\PB_Gamer'
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
}
}