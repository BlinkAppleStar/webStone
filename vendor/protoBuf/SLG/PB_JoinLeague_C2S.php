<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_JoinLeague_C2S message
 */
class PB_JoinLeague_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const REQUEST = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQUEST => array(
            'name' => 'request',
            'required' => false,
            'type' => '\PB_LeagueJoinRequest'
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
        $this->values[self::REQUEST] = null;
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
     * Sets value of 'request' property
     *
     * @param \PB_LeagueJoinRequest $value Property value
     *
     * @return null
     */
    public function setRequest(\PB_LeagueJoinRequest $value=null)
    {
        return $this->set(self::REQUEST, $value);
    }

    /**
     * Returns value of 'request' property
     *
     * @return \PB_LeagueJoinRequest
     */
    public function getRequest()
    {
        return $this->get(self::REQUEST);
    }
}
}