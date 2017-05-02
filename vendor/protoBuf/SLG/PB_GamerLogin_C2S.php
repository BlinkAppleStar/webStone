<?php
/**
 * Auto generated from Gamer.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerLogin_C2S message
 */
class PB_GamerLogin_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const SESSION = 1;
    const CHANNEL = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SESSION => array(
            'name' => 'session',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CHANNEL => array(
            'name' => 'channel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::SESSION] = null;
        $this->values[self::CHANNEL] = null;
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
     * Sets value of 'session' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSession($value)
    {
        return $this->set(self::SESSION, $value);
    }

    /**
     * Returns value of 'session' property
     *
     * @return string
     */
    public function getSession()
    {
        $value = $this->get(self::SESSION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'channel' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChannel($value)
    {
        return $this->set(self::CHANNEL, $value);
    }

    /**
     * Returns value of 'channel' property
     *
     * @return string
     */
    public function getChannel()
    {
        $value = $this->get(self::CHANNEL);
        return $value === null ? (string)$value : $value;
    }
}
}