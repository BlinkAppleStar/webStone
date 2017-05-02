<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LeagueGiftBag message
 */
class PB_LeagueGiftBag extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const GIVER_ID = 2;
    const GIVER_NAME = 3;
    const GIVER_ICON = 4;
    const PACK_ID = 5;
    const SEND_TIME = 6;
    const TAKERS = 7;
    const END_TIME = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GIVER_ID => array(
            'name' => 'giver_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GIVER_NAME => array(
            'name' => 'giver_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GIVER_ICON => array(
            'name' => 'giver_icon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PACK_ID => array(
            'name' => 'pack_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SEND_TIME => array(
            'name' => 'send_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TAKERS => array(
            'name' => 'takers',
            'repeated' => true,
            'type' => '\PB_TakeLeagueGiftGamer'
        ),
        self::END_TIME => array(
            'name' => 'end_time',
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
        $this->values[self::GIVER_ID] = null;
        $this->values[self::GIVER_NAME] = null;
        $this->values[self::GIVER_ICON] = null;
        $this->values[self::PACK_ID] = null;
        $this->values[self::SEND_TIME] = null;
        $this->values[self::TAKERS] = array();
        $this->values[self::END_TIME] = null;
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
     * Sets value of 'giver_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGiverId($value)
    {
        return $this->set(self::GIVER_ID, $value);
    }

    /**
     * Returns value of 'giver_id' property
     *
     * @return integer
     */
    public function getGiverId()
    {
        $value = $this->get(self::GIVER_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'giver_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGiverName($value)
    {
        return $this->set(self::GIVER_NAME, $value);
    }

    /**
     * Returns value of 'giver_name' property
     *
     * @return string
     */
    public function getGiverName()
    {
        $value = $this->get(self::GIVER_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'giver_icon' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGiverIcon($value)
    {
        return $this->set(self::GIVER_ICON, $value);
    }

    /**
     * Returns value of 'giver_icon' property
     *
     * @return integer
     */
    public function getGiverIcon()
    {
        $value = $this->get(self::GIVER_ICON);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'pack_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPackId($value)
    {
        return $this->set(self::PACK_ID, $value);
    }

    /**
     * Returns value of 'pack_id' property
     *
     * @return integer
     */
    public function getPackId()
    {
        $value = $this->get(self::PACK_ID);
        return $value === null ? (integer)$value : $value;
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
     * Appends value to 'takers' list
     *
     * @param \PB_TakeLeagueGiftGamer $value Value to append
     *
     * @return null
     */
    public function appendTakers(\PB_TakeLeagueGiftGamer $value)
    {
        return $this->append(self::TAKERS, $value);
    }

    /**
     * Clears 'takers' list
     *
     * @return null
     */
    public function clearTakers()
    {
        return $this->clear(self::TAKERS);
    }

    /**
     * Returns 'takers' list
     *
     * @return \PB_TakeLeagueGiftGamer[]
     */
    public function getTakers()
    {
        return $this->get(self::TAKERS);
    }

    /**
     * Returns 'takers' iterator
     *
     * @return \ArrayIterator
     */
    public function getTakersIterator()
    {
        return new \ArrayIterator($this->get(self::TAKERS));
    }

    /**
     * Returns element from 'takers' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_TakeLeagueGiftGamer
     */
    public function getTakersAt($offset)
    {
        return $this->get(self::TAKERS, $offset);
    }

    /**
     * Returns count of 'takers' list
     *
     * @return int
     */
    public function getTakersCount()
    {
        return $this->count(self::TAKERS);
    }

    /**
     * Sets value of 'end_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEndTime($value)
    {
        return $this->set(self::END_TIME, $value);
    }

    /**
     * Returns value of 'end_time' property
     *
     * @return integer
     */
    public function getEndTime()
    {
        $value = $this->get(self::END_TIME);
        return $value === null ? (integer)$value : $value;
    }
}
}