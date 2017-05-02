<?php
/**
 * Auto generated from GamerFriends.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerAddFriendEcho_C2S message
 */
class PB_GamerAddFriendEcho_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const RESULT = 2;
    const OID = 3;
    const MSG = 4;
    const REMSG = 5;
    const NAME = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RESULT => array(
            'name' => 'result',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OID => array(
            'name' => 'oid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSG => array(
            'name' => 'msg',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REMSG => array(
            'name' => 'remsg',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NAME => array(
            'name' => 'name',
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
        $this->values[self::ID] = null;
        $this->values[self::RESULT] = null;
        $this->values[self::OID] = null;
        $this->values[self::MSG] = null;
        $this->values[self::REMSG] = null;
        $this->values[self::NAME] = null;
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
     * Sets value of 'result' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResult($value)
    {
        return $this->set(self::RESULT, $value);
    }

    /**
     * Returns value of 'result' property
     *
     * @return integer
     */
    public function getResult()
    {
        $value = $this->get(self::RESULT);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'msg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsg($value)
    {
        return $this->set(self::MSG, $value);
    }

    /**
     * Returns value of 'msg' property
     *
     * @return string
     */
    public function getMsg()
    {
        $value = $this->get(self::MSG);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'remsg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRemsg($value)
    {
        return $this->set(self::REMSG, $value);
    }

    /**
     * Returns value of 'remsg' property
     *
     * @return string
     */
    public function getRemsg()
    {
        $value = $this->get(self::REMSG);
        return $value === null ? (string)$value : $value;
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
}
}