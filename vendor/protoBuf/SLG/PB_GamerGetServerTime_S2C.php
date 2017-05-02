<?php
/**
 * Auto generated from Gamer.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetServerTime_S2C message
 */
class PB_GamerGetServerTime_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const TIME = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => '\PB_ServerTime'
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
        $this->values[self::TIME] = null;
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
     * Sets value of 'time' property
     *
     * @param \PB_ServerTime $value Property value
     *
     * @return null
     */
    public function setTime(\PB_ServerTime $value=null)
    {
        return $this->set(self::TIME, $value);
    }

    /**
     * Returns value of 'time' property
     *
     * @return \PB_ServerTime
     */
    public function getTime()
    {
        return $this->get(self::TIME);
    }
}
}