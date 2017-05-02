<?php
/**
 * Auto generated from Quest.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_TakeDailyAward_C2S message
 */
class PB_TakeDailyAward_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const AWARD_ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AWARD_ID => array(
            'name' => 'award_id',
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
        $this->values[self::AWARD_ID] = null;
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
     * Sets value of 'award_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAwardId($value)
    {
        return $this->set(self::AWARD_ID, $value);
    }

    /**
     * Returns value of 'award_id' property
     *
     * @return integer
     */
    public function getAwardId()
    {
        $value = $this->get(self::AWARD_ID);
        return $value === null ? (integer)$value : $value;
    }
}
}