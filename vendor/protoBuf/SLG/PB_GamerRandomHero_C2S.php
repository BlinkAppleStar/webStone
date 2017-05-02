<?php
/**
 * Auto generated from Hero.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerRandomHero_C2S message
 */
class PB_GamerRandomHero_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const RANDOM_TYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RANDOM_TYPE => array(
            'name' => 'random_type',
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
        $this->values[self::ID] = null;
        $this->values[self::RANDOM_TYPE] = null;
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
     * Sets value of 'random_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRandomType($value)
    {
        return $this->set(self::RANDOM_TYPE, $value);
    }

    /**
     * Returns value of 'random_type' property
     *
     * @return integer
     */
    public function getRandomType()
    {
        $value = $this->get(self::RANDOM_TYPE);
        return $value === null ? (integer)$value : $value;
    }
}
}