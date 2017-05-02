<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LeagueSystemEvent message
 */
class PB_LeagueSystemEvent extends \ProtobufMessage
{
    /* Field index constants */
    const TIME = 1;
    const TYPE = 2;
    const GAMER_ID = 3;
    const GAMER_NAME = 4;
    const RELATER_ID = 5;
    const RELATER_NAME = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMER_ID => array(
            'name' => 'gamer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMER_NAME => array(
            'name' => 'gamer_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::RELATER_ID => array(
            'name' => 'relater_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RELATER_NAME => array(
            'name' => 'relater_name',
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
        $this->values[self::TIME] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::GAMER_ID] = null;
        $this->values[self::GAMER_NAME] = null;
        $this->values[self::RELATER_ID] = null;
        $this->values[self::RELATER_NAME] = null;
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
     * Sets value of 'time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTime($value)
    {
        return $this->set(self::TIME, $value);
    }

    /**
     * Returns value of 'time' property
     *
     * @return integer
     */
    public function getTime()
    {
        $value = $this->get(self::TIME);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'gamer_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGamerId($value)
    {
        return $this->set(self::GAMER_ID, $value);
    }

    /**
     * Returns value of 'gamer_id' property
     *
     * @return integer
     */
    public function getGamerId()
    {
        $value = $this->get(self::GAMER_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'gamer_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGamerName($value)
    {
        return $this->set(self::GAMER_NAME, $value);
    }

    /**
     * Returns value of 'gamer_name' property
     *
     * @return string
     */
    public function getGamerName()
    {
        $value = $this->get(self::GAMER_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'relater_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRelaterId($value)
    {
        return $this->set(self::RELATER_ID, $value);
    }

    /**
     * Returns value of 'relater_id' property
     *
     * @return integer
     */
    public function getRelaterId()
    {
        $value = $this->get(self::RELATER_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'relater_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRelaterName($value)
    {
        return $this->set(self::RELATER_NAME, $value);
    }

    /**
     * Returns value of 'relater_name' property
     *
     * @return string
     */
    public function getRelaterName()
    {
        $value = $this->get(self::RELATER_NAME);
        return $value === null ? (string)$value : $value;
    }
}
}