<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_JoinLeague_S2C message
 */
class PB_JoinLeague_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const DIRECT_JOIN = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DIRECT_JOIN => array(
            'name' => 'direct_join',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::DIRECT_JOIN] = null;
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
     * Sets value of 'direct_join' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDirectJoin($value)
    {
        return $this->set(self::DIRECT_JOIN, $value);
    }

    /**
     * Returns value of 'direct_join' property
     *
     * @return boolean
     */
    public function getDirectJoin()
    {
        $value = $this->get(self::DIRECT_JOIN);
        return $value === null ? (boolean)$value : $value;
    }
}
}