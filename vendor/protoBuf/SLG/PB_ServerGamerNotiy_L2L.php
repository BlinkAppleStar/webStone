<?php
/**
 * Auto generated from Server.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ServerGamerNotiy_L2L message
 */
class PB_ServerGamerNotiy_L2L extends \ProtobufMessage
{
    /* Field index constants */
    const GID = 1;
    const CMD = 2;
    const ACT = 3;
    const DATA = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GID => array(
            'name' => 'gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CMD => array(
            'name' => 'cmd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACT => array(
            'name' => 'act',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATA => array(
            'name' => 'data',
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
        $this->values[self::GID] = null;
        $this->values[self::CMD] = null;
        $this->values[self::ACT] = null;
        $this->values[self::DATA] = null;
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
     * Sets value of 'cmd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCmd($value)
    {
        return $this->set(self::CMD, $value);
    }

    /**
     * Returns value of 'cmd' property
     *
     * @return integer
     */
    public function getCmd()
    {
        $value = $this->get(self::CMD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'act' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAct($value)
    {
        return $this->set(self::ACT, $value);
    }

    /**
     * Returns value of 'act' property
     *
     * @return integer
     */
    public function getAct()
    {
        $value = $this->get(self::ACT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setData($value)
    {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return string
     */
    public function getData()
    {
        $value = $this->get(self::DATA);
        return $value === null ? (string)$value : $value;
    }
}
}