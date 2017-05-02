<?php
/**
 * Auto generated from Card.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetCard_S2C message
 */
class PB_GamerGetCard_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const TYPE = 1;
    const GIFT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TYPE => array(
            'name' => 'type',
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
        $this->values[self::TYPE] = null;
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