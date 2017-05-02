<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_UpdateLeague_C2S message
 */
class PB_UpdateLeague_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const LEAGUE_ID = 2;
    const LEAGUE_NAME = 3;
    const REGION = 4;
    const ADD_MODE = 5;
    const LOCATE_TYPE = 6;
    const LEAGUE_DESC = 7;
    const SHORT_NAME = 8;
    const FLAG = 9;
    const ANNOUNCEMENT = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEAGUE_ID => array(
            'name' => 'league_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEAGUE_NAME => array(
            'name' => 'league_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REGION => array(
            'name' => 'region',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ADD_MODE => array(
            'name' => 'add_mode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOCATE_TYPE => array(
            'name' => 'locate_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEAGUE_DESC => array(
            'name' => 'league_desc',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SHORT_NAME => array(
            'name' => 'short_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FLAG => array(
            'default' => 1,
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
        $this->values[self::LEAGUE_ID] = null;
        $this->values[self::LEAGUE_NAME] = null;
        $this->values[self::REGION] = null;
        $this->values[self::ADD_MODE] = null;
        $this->values[self::LOCATE_TYPE] = null;
        $this->values[self::LEAGUE_DESC] = null;
        $this->values[self::SHORT_NAME] = null;
        $this->values[self::FLAG] = self::$fields[self::FLAG]['default'];
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
     * Sets value of 'league_desc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLeagueDesc($value)
    {
        return $this->set(self::LEAGUE_DESC, $value);
    }

    /**
     * Returns value of 'league_desc' property
     *
     * @return string
     */
    public function getLeagueDesc()
    {
        $value = $this->get(self::LEAGUE_DESC);
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