<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_PVPNotify message
 */
class PB_PVPNotify extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const GID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GID => array(
            'name' => 'gid',
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
        $this->values[self::TYPE] = null;
        $this->values[self::GID] = null;
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
}
}