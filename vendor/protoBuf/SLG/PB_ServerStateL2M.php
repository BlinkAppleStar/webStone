<?php
/**
 * Auto generated from Server.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ServerStateL2M message
 */
class PB_ServerStateL2M extends \ProtobufMessage
{
    /* Field index constants */
    const SERVER_ID = 1;
    const IP = 2;
    const PORT = 3;
    const PID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SERVER_ID => array(
            'name' => 'server_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IP => array(
            'name' => 'ip',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PORT => array(
            'name' => 'port',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PID => array(
            'name' => 'pid',
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
        $this->values[self::SERVER_ID] = null;
        $this->values[self::IP] = null;
        $this->values[self::PORT] = null;
        $this->values[self::PID] = null;
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
     * Sets value of 'server_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setServerId($value)
    {
        return $this->set(self::SERVER_ID, $value);
    }

    /**
     * Returns value of 'server_id' property
     *
     * @return integer
     */
    public function getServerId()
    {
        $value = $this->get(self::SERVER_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'ip' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIp($value)
    {
        return $this->set(self::IP, $value);
    }

    /**
     * Returns value of 'ip' property
     *
     * @return string
     */
    public function getIp()
    {
        $value = $this->get(self::IP);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'port' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPort($value)
    {
        return $this->set(self::PORT, $value);
    }

    /**
     * Returns value of 'port' property
     *
     * @return integer
     */
    public function getPort()
    {
        $value = $this->get(self::PORT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'pid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPid($value)
    {
        return $this->set(self::PID, $value);
    }

    /**
     * Returns value of 'pid' property
     *
     * @return integer
     */
    public function getPid()
    {
        $value = $this->get(self::PID);
        return $value === null ? (integer)$value : $value;
    }
}
}