<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LeagueJoinRequest message
 */
class PB_LeagueJoinRequest extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const NAME = 2;
    const LEAGUE_ID = 3;
    const REQ_TIME = 4;
    const LEVEL = 5;
    const POWER = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LEAGUE_ID => array(
            'name' => 'league_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REQ_TIME => array(
            'name' => 'req_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POWER => array(
            'name' => 'power',
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
        $this->values[self::NAME] = null;
        $this->values[self::LEAGUE_ID] = null;
        $this->values[self::REQ_TIME] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::POWER] = null;
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
     * Sets value of 'req_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReqTime($value)
    {
        return $this->set(self::REQ_TIME, $value);
    }

    /**
     * Returns value of 'req_time' property
     *
     * @return integer
     */
    public function getReqTime()
    {
        $value = $this->get(self::REQ_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return integer
     */
    public function getLevel()
    {
        $value = $this->get(self::LEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'power' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPower($value)
    {
        return $this->set(self::POWER, $value);
    }

    /**
     * Returns value of 'power' property
     *
     * @return integer
     */
    public function getPower()
    {
        $value = $this->get(self::POWER);
        return $value === null ? (integer)$value : $value;
    }
}
}