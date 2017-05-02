<?php
/**
 * Auto generated from Server.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ServerStateM2L message
 */
class PB_ServerStateM2L extends \ProtobufMessage
{
    /* Field index constants */
    const IP = 1;
    const PORT = 2;
    const PID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::IP => array(
            'name' => 'ip',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PORT => array(
            'name' => 'port',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PID => array(
            'name' => 'pid',
            'repeated' => true,
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
        $this->values[self::IP] = array();
        $this->values[self::PORT] = array();
        $this->values[self::PID] = array();
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
     * Appends value to 'ip' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendIp($value)
    {
        return $this->append(self::IP, $value);
    }

    /**
     * Clears 'ip' list
     *
     * @return null
     */
    public function clearIp()
    {
        return $this->clear(self::IP);
    }

    /**
     * Returns 'ip' list
     *
     * @return string[]
     */
    public function getIp()
    {
        return $this->get(self::IP);
    }

    /**
     * Returns 'ip' iterator
     *
     * @return \ArrayIterator
     */
    public function getIpIterator()
    {
        return new \ArrayIterator($this->get(self::IP));
    }

    /**
     * Returns element from 'ip' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getIpAt($offset)
    {
        return $this->get(self::IP, $offset);
    }

    /**
     * Returns count of 'ip' list
     *
     * @return int
     */
    public function getIpCount()
    {
        return $this->count(self::IP);
    }

    /**
     * Appends value to 'port' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendPort($value)
    {
        return $this->append(self::PORT, $value);
    }

    /**
     * Clears 'port' list
     *
     * @return null
     */
    public function clearPort()
    {
        return $this->clear(self::PORT);
    }

    /**
     * Returns 'port' list
     *
     * @return integer[]
     */
    public function getPort()
    {
        return $this->get(self::PORT);
    }

    /**
     * Returns 'port' iterator
     *
     * @return \ArrayIterator
     */
    public function getPortIterator()
    {
        return new \ArrayIterator($this->get(self::PORT));
    }

    /**
     * Returns element from 'port' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getPortAt($offset)
    {
        return $this->get(self::PORT, $offset);
    }

    /**
     * Returns count of 'port' list
     *
     * @return int
     */
    public function getPortCount()
    {
        return $this->count(self::PORT);
    }

    /**
     * Appends value to 'pid' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendPid($value)
    {
        return $this->append(self::PID, $value);
    }

    /**
     * Clears 'pid' list
     *
     * @return null
     */
    public function clearPid()
    {
        return $this->clear(self::PID);
    }

    /**
     * Returns 'pid' list
     *
     * @return integer[]
     */
    public function getPid()
    {
        return $this->get(self::PID);
    }

    /**
     * Returns 'pid' iterator
     *
     * @return \ArrayIterator
     */
    public function getPidIterator()
    {
        return new \ArrayIterator($this->get(self::PID));
    }

    /**
     * Returns element from 'pid' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getPidAt($offset)
    {
        return $this->get(self::PID, $offset);
    }

    /**
     * Returns count of 'pid' list
     *
     * @return int
     */
    public function getPidCount()
    {
        return $this->count(self::PID);
    }
}
}