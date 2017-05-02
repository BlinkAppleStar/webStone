<?php
/**
 * Auto generated from GamerFriends.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerFindGamer_S2C message
 */
class PB_GamerFindGamer_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const MAIN = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MAIN => array(
            'name' => 'main',
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
        $this->values[self::MAIN] = null;
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
}
}