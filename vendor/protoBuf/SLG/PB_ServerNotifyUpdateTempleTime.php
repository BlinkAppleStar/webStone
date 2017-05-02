<?php
/**
 * Auto generated from Server.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ServerNotifyUpdateTempleTime message
 */
class PB_ServerNotifyUpdateTempleTime extends \ProtobufMessage
{
    /* Field index constants */
    const LEAGUE_ID = 1;
    const DAY_TIMESTAMP = 2;
    const WEEK_TIMESTAMP = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LEAGUE_ID => array(
            'name' => 'league_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DAY_TIMESTAMP => array(
            'name' => 'day_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEEK_TIMESTAMP => array(
            'name' => 'week_timestamp',
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
        $this->values[self::LEAGUE_ID] = null;
        $this->values[self::DAY_TIMESTAMP] = null;
        $this->values[self::WEEK_TIMESTAMP] = null;
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
     * Sets value of 'league_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLeagueId($value)
    {
        return $this->set(self::LEAGUE_ID, $value);
    }

    /**
     * Returns value of 'league_id' property
     *
     * @return integer
     */
    public function getLeagueId()
    {
        $value = $this->get(self::LEAGUE_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'day_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDayTimestamp($value)
    {
        return $this->set(self::DAY_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'day_timestamp' property
     *
     * @return integer
     */
    public function getDayTimestamp()
    {
        $value = $this->get(self::DAY_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'week_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWeekTimestamp($value)
    {
        return $this->set(self::WEEK_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'week_timestamp' property
     *
     * @return integer
     */
    public function getWeekTimestamp()
    {
        $value = $this->get(self::WEEK_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }
}
}