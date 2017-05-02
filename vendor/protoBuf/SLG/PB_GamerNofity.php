<?php
/**
 * Auto generated from GamerNotify.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerNofity message
 */
class PB_GamerNofity extends \ProtobufMessage
{
    /* Field index constants */
    const REASON = 1;
    const ID = 2;
    const NAME = 3;
    const OID = 4;
    const ONAME = 5;
    const TIME = 6;
    const MSG = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REASON => array(
            'name' => 'reason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OID => array(
            'name' => 'oid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ONAME => array(
            'name' => 'oname',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSG => array(
            'name' => 'msg',
            'repeated' => true,
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
        $this->values[self::REASON] = null;
        $this->values[self::ID] = null;
        $this->values[self::NAME] = null;
        $this->values[self::OID] = null;
        $this->values[self::ONAME] = null;
        $this->values[self::TIME] = null;
        $this->values[self::MSG] = array();
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
     * Sets value of 'reason' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReason($value)
    {
        return $this->set(self::REASON, $value);
    }

    /**
     * Returns value of 'reason' property
     *
     * @return integer
     */
    public function getReason()
    {
        $value = $this->get(self::REASON);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'oid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOid($value)
    {
        return $this->set(self::OID, $value);
    }

    /**
     * Returns value of 'oid' property
     *
     * @return integer
     */
    public function getOid()
    {
        $value = $this->get(self::OID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'oname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOname($value)
    {
        return $this->set(self::ONAME, $value);
    }

    /**
     * Returns value of 'oname' property
     *
     * @return string
     */
    public function getOname()
    {
        $value = $this->get(self::ONAME);
        return $value === null ? (string)$value : $value;
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
     * Appends value to 'msg' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendMsg($value)
    {
        return $this->append(self::MSG, $value);
    }

    /**
     * Clears 'msg' list
     *
     * @return null
     */
    public function clearMsg()
    {
        return $this->clear(self::MSG);
    }

    /**
     * Returns 'msg' list
     *
     * @return string[]
     */
    public function getMsg()
    {
        return $this->get(self::MSG);
    }

    /**
     * Returns 'msg' iterator
     *
     * @return \ArrayIterator
     */
    public function getMsgIterator()
    {
        return new \ArrayIterator($this->get(self::MSG));
    }

    /**
     * Returns element from 'msg' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getMsgAt($offset)
    {
        return $this->get(self::MSG, $offset);
    }

    /**
     * Returns count of 'msg' list
     *
     * @return int
     */
    public function getMsgCount()
    {
        return $this->count(self::MSG);
    }
}
}