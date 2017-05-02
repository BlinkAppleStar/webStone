<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_AssembleInfo message
 */
class PB_AssembleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const LEAGUE_ID = 1;
    const HKEY = 2;
    const BEGIN_TIME = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LEAGUE_ID => array(
            'name' => 'league_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HKEY => array(
            'name' => 'hkey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BEGIN_TIME => array(
            'name' => 'begin_time',
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
        $this->values[self::HKEY] = null;
        $this->values[self::BEGIN_TIME] = null;
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
     * Sets value of 'hkey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHkey($value)
    {
        return $this->set(self::HKEY, $value);
    }

    /**
     * Returns value of 'hkey' property
     *
     * @return string
     */
    public function getHkey()
    {
        $value = $this->get(self::HKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'begin_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBeginTime($value)
    {
        return $this->set(self::BEGIN_TIME, $value);
    }

    /**
     * Returns value of 'begin_time' property
     *
     * @return integer
     */
    public function getBeginTime()
    {
        $value = $this->get(self::BEGIN_TIME);
        return $value === null ? (integer)$value : $value;
    }
}
}