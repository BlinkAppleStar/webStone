<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_PersonalTalk message
 */
class PB_PersonalTalk extends \ProtobufMessage
{
    /* Field index constants */
    const INFO_ID = 1;
    const TALKER_ID = 2;
    const TALKER_NAME = 3;
    const SEND_TIME = 4;
    const READ_TIME = 5;
    const MSG = 6;
    const IS_SELF = 7;
    const ICON = 8;
    const LEAGUE_NAME = 9;
    const LEAGUE_SHORT = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INFO_ID => array(
            'name' => 'info_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TALKER_ID => array(
            'name' => 'talker_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TALKER_NAME => array(
            'name' => 'talker_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SEND_TIME => array(
            'name' => 'send_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::READ_TIME => array(
            'name' => 'read_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSG => array(
            'name' => 'msg',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IS_SELF => array(
            'name' => 'is_self',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::ICON => array(
            'name' => 'icon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEAGUE_NAME => array(
            'name' => 'league_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LEAGUE_SHORT => array(
            'name' => 'league_short',
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
        $this->values[self::INFO_ID] = null;
        $this->values[self::TALKER_ID] = null;
        $this->values[self::TALKER_NAME] = null;
        $this->values[self::SEND_TIME] = null;
        $this->values[self::READ_TIME] = null;
        $this->values[self::MSG] = null;
        $this->values[self::IS_SELF] = null;
        $this->values[self::ICON] = null;
        $this->values[self::LEAGUE_NAME] = null;
        $this->values[self::LEAGUE_SHORT] = null;
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
     * Sets value of 'info_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInfoId($value)
    {
        return $this->set(self::INFO_ID, $value);
    }

    /**
     * Returns value of 'info_id' property
     *
     * @return integer
     */
    public function getInfoId()
    {
        $value = $this->get(self::INFO_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'talker_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTalkerId($value)
    {
        return $this->set(self::TALKER_ID, $value);
    }

    /**
     * Returns value of 'talker_id' property
     *
     * @return integer
     */
    public function getTalkerId()
    {
        $value = $this->get(self::TALKER_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'talker_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTalkerName($value)
    {
        return $this->set(self::TALKER_NAME, $value);
    }

    /**
     * Returns value of 'talker_name' property
     *
     * @return string
     */
    public function getTalkerName()
    {
        $value = $this->get(self::TALKER_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'send_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSendTime($value)
    {
        return $this->set(self::SEND_TIME, $value);
    }

    /**
     * Returns value of 'send_time' property
     *
     * @return integer
     */
    public function getSendTime()
    {
        $value = $this->get(self::SEND_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'read_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReadTime($value)
    {
        return $this->set(self::READ_TIME, $value);
    }

    /**
     * Returns value of 'read_time' property
     *
     * @return integer
     */
    public function getReadTime()
    {
        $value = $this->get(self::READ_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'msg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsg($value)
    {
        return $this->set(self::MSG, $value);
    }

    /**
     * Returns value of 'msg' property
     *
     * @return string
     */
    public function getMsg()
    {
        $value = $this->get(self::MSG);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'is_self' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsSelf($value)
    {
        return $this->set(self::IS_SELF, $value);
    }

    /**
     * Returns value of 'is_self' property
     *
     * @return boolean
     */
    public function getIsSelf()
    {
        $value = $this->get(self::IS_SELF);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'icon' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIcon($value)
    {
        return $this->set(self::ICON, $value);
    }

    /**
     * Returns value of 'icon' property
     *
     * @return integer
     */
    public function getIcon()
    {
        $value = $this->get(self::ICON);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'league_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLeagueName($value)
    {
        return $this->set(self::LEAGUE_NAME, $value);
    }

    /**
     * Returns value of 'league_name' property
     *
     * @return string
     */
    public function getLeagueName()
    {
        $value = $this->get(self::LEAGUE_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'league_short' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLeagueShort($value)
    {
        return $this->set(self::LEAGUE_SHORT, $value);
    }

    /**
     * Returns value of 'league_short' property
     *
     * @return string
     */
    public function getLeagueShort()
    {
        $value = $this->get(self::LEAGUE_SHORT);
        return $value === null ? (string)$value : $value;
    }
}
}