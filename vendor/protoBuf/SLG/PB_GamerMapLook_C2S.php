<?php
/**
 * Auto generated from Map.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerMapLook_C2S message
 */
class PB_GamerMapLook_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const GID = 1;
    const START = 2;
    const END = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GID => array(
            'name' => 'gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::START => array(
            'name' => 'start',
            'required' => false,
            'type' => '\PB_Vec2'
        ),
        self::END => array(
            'name' => 'end',
            'required' => false,
            'type' => '\PB_Vec2'
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
        $this->values[self::GID] = null;
        $this->values[self::START] = null;
        $this->values[self::END] = null;
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
     * Sets value of 'gid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGid($value)
    {
        return $this->set(self::GID, $value);
    }

    /**
     * Returns value of 'gid' property
     *
     * @return integer
     */
    public function getGid()
    {
        $value = $this->get(self::GID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'start' property
     *
     * @param \PB_Vec2 $value Property value
     *
     * @return null
     */
    public function setStart(\PB_Vec2 $value=null)
    {
        return $this->set(self::START, $value);
    }

    /**
     * Returns value of 'start' property
     *
     * @return \PB_Vec2
     */
    public function getStart()
    {
        return $this->get(self::START);
    }

    /**
     * Sets value of 'end' property
     *
     * @param \PB_Vec2 $value Property value
     *
     * @return null
     */
    public function setEnd(\PB_Vec2 $value=null)
    {
        return $this->set(self::END, $value);
    }

    /**
     * Returns value of 'end' property
     *
     * @return \PB_Vec2
     */
    public function getEnd()
    {
        return $this->get(self::END);
    }
}
}