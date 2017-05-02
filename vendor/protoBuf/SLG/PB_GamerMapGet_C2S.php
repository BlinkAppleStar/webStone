<?php
/**
 * Auto generated from Map.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerMapGet_C2S message
 */
class PB_GamerMapGet_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const GID = 1;
    const TARGET = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GID => array(
            'name' => 'gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TARGET => array(
            'name' => 'target',
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
        $this->values[self::TARGET] = null;
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
     * Sets value of 'target' property
     *
     * @param \PB_Vec2 $value Property value
     *
     * @return null
     */
    public function setTarget(\PB_Vec2 $value=null)
    {
        return $this->set(self::TARGET, $value);
    }

    /**
     * Returns value of 'target' property
     *
     * @return \PB_Vec2
     */
    public function getTarget()
    {
        return $this->get(self::TARGET);
    }
}
}