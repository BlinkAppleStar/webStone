<?php
/**
 * Auto generated from Quest.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_NotifyDailyAward message
 */
class PB_NotifyDailyAward extends \ProtobufMessage
{
    /* Field index constants */
    const DAILY_AWARD_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DAILY_AWARD_ID => array(
            'name' => 'daily_award_id',
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
        $this->values[self::DAILY_AWARD_ID] = null;
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
     * Sets value of 'daily_award_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDailyAwardId($value)
    {
        return $this->set(self::DAILY_AWARD_ID, $value);
    }

    /**
     * Returns value of 'daily_award_id' property
     *
     * @return integer
     */
    public function getDailyAwardId()
    {
        $value = $this->get(self::DAILY_AWARD_ID);
        return $value === null ? (integer)$value : $value;
    }
}
}