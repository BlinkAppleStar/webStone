<?php
/**
 * Auto generated from GamerAchieve.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetAchieveGift_S2C message
 */
class PB_GamerGetAchieveGift_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const AID = 1;
    const GIFT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::AID => array(
            'name' => 'aid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GIFT => array(
            'name' => 'gift',
            'required' => false,
            'type' => '\PB_Gift'
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
        $this->values[self::AID] = null;
        $this->values[self::GIFT] = null;
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

    /**
     * Sets value of 'gift' property
     *
     * @param \PB_Gift $value Property value
     *
     * @return null
     */
    public function setGift(\PB_Gift $value=null)
    {
        return $this->set(self::GIFT, $value);
    }

    /**
     * Returns value of 'gift' property
     *
     * @return \PB_Gift
     */
    public function getGift()
    {
        return $this->get(self::GIFT);
    }
}
}