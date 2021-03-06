<?php
/**
 * Auto generated from GamerAchieve.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetAchieveGift_C2S message
 */
class PB_GamerGetAchieveGift_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const GID = 1;
    const AID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GID => array(
            'name' => 'gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AID => array(
            'name' => 'aid',
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
        $this->values[self::GID] = null;
        $this->values[self::AID] = null;
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
     * Sets value of 'aid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAid($value)
    {
        return $this->set(self::AID, $value);
    }

    /**
     * Returns value of 'aid' property
     *
     * @return integer
     */
    public function getAid()
    {
        $value = $this->get(self::AID);
        return $value === null ? (integer)$value : $value;
    }
}
}