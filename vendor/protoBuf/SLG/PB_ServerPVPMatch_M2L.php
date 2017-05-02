<?php
/**
 * Auto generated from Server.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ServerPVPMatch_M2L message
 */
class PB_ServerPVPMatch_M2L extends \ProtobufMessage
{
    /* Field index constants */
    const SESSION = 1;
    const ID = 2;
    const MATCH = 3;
    const SERVER_IP = 5;
    const SERVER_PORT = 6;
    const INDEX = 7;
    const MAPID = 8;
    const TYPE = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SESSION => array(
            'name' => 'session',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MATCH => array(
            'name' => 'match',
            'repeated' => true,
            'type' => '\PB_GamerPVPMatch'
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
        self::INDEX => array(
            'name' => 'index',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAPID => array(
            'name' => 'mapid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
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
        $this->values[self::SESSION] = null;
        $this->values[self::ID] = null;
        $this->values[self::MATCH] = array();
        $this->values[self::SERVER_IP] = null;
        $this->values[self::SERVER_PORT] = null;
        $this->values[self::INDEX] = null;
        $this->values[self::MAPID] = null;
        $this->values[self::TYPE] = null;
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
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'match' list
     *
     * @param \PB_GamerPVPMatch $value Value to append
     *
     * @return null
     */
    public function appendMatch(\PB_GamerPVPMatch $value)
    {
        return $this->append(self::MATCH, $value);
    }

    /**
     * Clears 'match' list
     *
     * @return null
     */
    public function clearMatch()
    {
        return $this->clear(self::MATCH);
    }

    /**
     * Returns 'match' list
     *
     * @return \PB_GamerPVPMatch[]
     */
    public function getMatch()
    {
        return $this->get(self::MATCH);
    }

    /**
     * Returns 'match' iterator
     *
     * @return \ArrayIterator
     */
    public function getMatchIterator()
    {
        return new \ArrayIterator($this->get(self::MATCH));
    }

    /**
     * Returns element from 'match' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_GamerPVPMatch
     */
    public function getMatchAt($offset)
    {
        return $this->get(self::MATCH, $offset);
    }

    /**
     * Returns count of 'match' list
     *
     * @return int
     */
    public function getMatchCount()
    {
        return $this->count(self::MATCH);
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
     * Sets value of 'index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIndex($value)
    {
        return $this->set(self::INDEX, $value);
    }

    /**
     * Returns value of 'index' property
     *
     * @return integer
     */
    public function getIndex()
    {
        $value = $this->get(self::INDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'mapid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMapid($value)
    {
        return $this->set(self::MAPID, $value);
    }

    /**
     * Returns value of 'mapid' property
     *
     * @return integer
     */
    public function getMapid()
    {
        $value = $this->get(self::MAPID);
        return $value === null ? (integer)$value : $value;
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
}
}