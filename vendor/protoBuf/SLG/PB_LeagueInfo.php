<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LeagueInfo message
 */
class PB_LeagueInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const NAME = 2;
    const LEVEL = 3;
    const REGION = 4;
    const DESC = 5;
    const SCORE = 6;
    const LOCATE_TYPE = 7;
    const ADD_MODE = 8;
    const CREATE_TIME = 9;
    const DISMISS_TIME = 10;
    const BOSS_ID = 11;
    const BOSS_NAME = 12;
    const SHORT_NAME = 13;
    const MEMBER_COUNT = 14;
    const FLAG = 15;
    const ANNOUNCEMENT = 16;

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
        self::LEVEL => array(
            'default' => 1,
            'name' => 'level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REGION => array(
            'name' => 'region',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DESC => array(
            'name' => 'desc',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SCORE => array(
            'name' => 'score',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOCATE_TYPE => array(
            'name' => 'locate_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADD_MODE => array(
            'name' => 'add_mode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CREATE_TIME => array(
            'name' => 'create_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DISMISS_TIME => array(
            'name' => 'dismiss_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BOSS_ID => array(
            'name' => 'boss_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BOSS_NAME => array(
            'name' => 'boss_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SHORT_NAME => array(
            'name' => 'short_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MEMBER_COUNT => array(
            'name' => 'member_count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FLAG => array(
            'name' => 'flag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ANNOUNCEMENT => array(
            'name' => 'announcement',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::LEVEL] = self::$fields[self::LEVEL]['default'];
        $this->values[self::REGION] = null;
        $this->values[self::DESC] = null;
        $this->values[self::SCORE] = null;
        $this->values[self::LOCATE_TYPE] = null;
        $this->values[self::ADD_MODE] = null;
        $this->values[self::CREATE_TIME] = null;
        $this->values[self::DISMISS_TIME] = null;
        $this->values[self::BOSS_ID] = null;
        $this->values[self::BOSS_NAME] = null;
        $this->values[self::SHORT_NAME] = null;
        $this->values[self::MEMBER_COUNT] = null;
        $this->values[self::FLAG] = null;
        $this->values[self::ANNOUNCEMENT] = null;
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
     * Sets value of 'region' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRegion($value)
    {
        return $this->set(self::REGION, $value);
    }

    /**
     * Returns value of 'region' property
     *
     * @return integer
     */
    public function getRegion()
    {
        $value = $this->get(self::REGION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'desc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDesc($value)
    {
        return $this->set(self::DESC, $value);
    }

    /**
     * Returns value of 'desc' property
     *
     * @return string
     */
    public function getDesc()
    {
        $value = $this->get(self::DESC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'score' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScore($value)
    {
        return $this->set(self::SCORE, $value);
    }

    /**
     * Returns value of 'score' property
     *
     * @return integer
     */
    public function getScore()
    {
        $value = $this->get(self::SCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'locate_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLocateType($value)
    {
        return $this->set(self::LOCATE_TYPE, $value);
    }

    /**
     * Returns value of 'locate_type' property
     *
     * @return integer
     */
    public function getLocateType()
    {
        $value = $this->get(self::LOCATE_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'add_mode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAddMode($value)
    {
        return $this->set(self::ADD_MODE, $value);
    }

    /**
     * Returns value of 'add_mode' property
     *
     * @return integer
     */
    public function getAddMode()
    {
        $value = $this->get(self::ADD_MODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'create_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCreateTime($value)
    {
        return $this->set(self::CREATE_TIME, $value);
    }

    /**
     * Returns value of 'create_time' property
     *
     * @return integer
     */
    public function getCreateTime()
    {
        $value = $this->get(self::CREATE_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'dismiss_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDismissTime($value)
    {
        return $this->set(self::DISMISS_TIME, $value);
    }

    /**
     * Returns value of 'dismiss_time' property
     *
     * @return integer
     */
    public function getDismissTime()
    {
        $value = $this->get(self::DISMISS_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'boss_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBossId($value)
    {
        return $this->set(self::BOSS_ID, $value);
    }

    /**
     * Returns value of 'boss_id' property
     *
     * @return integer
     */
    public function getBossId()
    {
        $value = $this->get(self::BOSS_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'boss_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBossName($value)
    {
        return $this->set(self::BOSS_NAME, $value);
    }

    /**
     * Returns value of 'boss_name' property
     *
     * @return string
     */
    public function getBossName()
    {
        $value = $this->get(self::BOSS_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'short_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShortName($value)
    {
        return $this->set(self::SHORT_NAME, $value);
    }

    /**
     * Returns value of 'short_name' property
     *
     * @return string
     */
    public function getShortName()
    {
        $value = $this->get(self::SHORT_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'member_count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMemberCount($value)
    {
        return $this->set(self::MEMBER_COUNT, $value);
    }

    /**
     * Returns value of 'member_count' property
     *
     * @return integer
     */
    public function getMemberCount()
    {
        $value = $this->get(self::MEMBER_COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'flag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFlag($value)
    {
        return $this->set(self::FLAG, $value);
    }

    /**
     * Returns value of 'flag' property
     *
     * @return integer
     */
    public function getFlag()
    {
        $value = $this->get(self::FLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'announcement' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAnnouncement($value)
    {
        return $this->set(self::ANNOUNCEMENT, $value);
    }

    /**
     * Returns value of 'announcement' property
     *
     * @return string
     */
    public function getAnnouncement()
    {
        $value = $this->get(self::ANNOUNCEMENT);
        return $value === null ? (string)$value : $value;
    }
}
}