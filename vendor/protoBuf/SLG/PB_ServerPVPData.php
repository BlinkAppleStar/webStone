<?php
/**
 * Auto generated from Server.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ServerPVPData message
 */
class PB_ServerPVPData extends \ProtobufMessage
{
    /* Field index constants */
    const SESSION = 1;
    const BID = 2;
    const TIME = 3;
    const MATCH = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SESSION => array(
            'name' => 'session',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BID => array(
            'name' => 'bid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MATCH => array(
            'name' => 'match',
            'repeated' => true,
            'type' => '\PB_GamerPVPMatch'
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
        $this->values[self::BID] = null;
        $this->values[self::TIME] = null;
        $this->values[self::MATCH] = array();
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
     * Sets value of 'bid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBid($value)
    {
        return $this->set(self::BID, $value);
    }

    /**
     * Returns value of 'bid' property
     *
     * @return integer
     */
    public function getBid()
    {
        $value = $this->get(self::BID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTime($value)
    {
        return $this->set(self::TIME, $value);
    }

    /**
     * Returns value of 'time' property
     *
     * @return integer
     */
    public function getTime()
    {
        $value = $this->get(self::TIME);
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
}
}