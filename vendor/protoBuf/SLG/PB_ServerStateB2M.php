<?php
/**
 * Auto generated from Server.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ServerStateB2M message
 */
class PB_ServerStateB2M extends \ProtobufMessage
{
    /* Field index constants */
    const SERVER_ID = 1;
    const SERVER_IP = 2;
    const SERVER_PORT = 3;
    const NET_TYPE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SERVER_ID => array(
            'name' => 'server_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SERVER_IP => array(
            'name' => 'server_ip',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SERVER_PORT => array(
            'name' => 'server_port',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NET_TYPE => array(
            'name' => 'net_type',
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
        $this->values[self::SERVER_IP] = null;
        $this->values[self::SERVER_PORT] = null;
        $this->values[self::NET_TYPE] = null;
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
     * Sets value of 'server_ip' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setServerIp($value)
    {
        return $this->set(self::SERVER_IP, $value);
    }

    /**
     * Returns value of 'server_ip' property
     *
     * @return string
     */
    public function getServerIp()
    {
        $value = $this->get(self::SERVER_IP);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'server_port' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setServerPort($value)
    {
        return $this->set(self::SERVER_PORT, $value);
    }

    /**
     * Returns value of 'server_port' property
     *
     * @return integer
     */
    public function getServerPort()
    {
        $value = $this->get(self::SERVER_PORT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'net_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNetType($value)
    {
        return $this->set(self::NET_TYPE, $value);
    }

    /**
     * Returns value of 'net_type' property
     *
     * @return integer
     */
    public function getNetType()
    {
        $value = $this->get(self::NET_TYPE);
        return $value === null ? (integer)$value : $value;
    }
}
}