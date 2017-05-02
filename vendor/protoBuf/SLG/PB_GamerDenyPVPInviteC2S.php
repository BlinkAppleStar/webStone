<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerDenyPVPInviteC2S message
 */
class PB_GamerDenyPVPInviteC2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const OID = 2;
    const REASON = 3;
    const GAMER = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OID => array(
            'name' => 'oid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REASON => array(
            'name' => 'reason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMER => array(
            'name' => 'gamer',
            'required' => false,
            'type' => '\PB_Gamer'
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
        $this->values[self::OID] = null;
        $this->values[self::REASON] = null;
        $this->values[self::GAMER] = null;
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
     * Sets value of 'gamer' property
     *
     * @param \PB_Gamer $value Property value
     *
     * @return null
     */
    public function setGamer(\PB_Gamer $value=null)
    {
        return $this->set(self::GAMER, $value);
    }

    /**
     * Returns value of 'gamer' property
     *
     * @return \PB_Gamer
     */
    public function getGamer()
    {
        return $this->get(self::GAMER);
    }
}
}