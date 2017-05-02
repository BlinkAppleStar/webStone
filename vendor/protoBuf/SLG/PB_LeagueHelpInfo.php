<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LeagueHelpInfo message
 */
class PB_LeagueHelpInfo extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const NAME = 2;
    const INFO_ID = 3;
    const TYPE = 4;
    const RELATE_ID = 5;
    const EXPIRE = 6;
    const MAX_COUNTS = 7;
    const HELPERS = 8;
    const ICON = 9;

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
        self::INFO_ID => array(
            'name' => 'info_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RELATE_ID => array(
            'name' => 'relate_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXPIRE => array(
            'name' => 'expire',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAX_COUNTS => array(
            'name' => 'max_counts',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HELPERS => array(
            'name' => 'helpers',
            'repeated' => true,
            'type' => '\PB_LeagueHelper'
        ),
        self::ICON => array(
            'name' => 'icon',
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
        $this->values[self::INFO_ID] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::RELATE_ID] = null;
        $this->values[self::EXPIRE] = null;
        $this->values[self::MAX_COUNTS] = null;
        $this->values[self::HELPERS] = array();
        $this->values[self::ICON] = null;
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
     * Sets value of 'relate_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRelateId($value)
    {
        return $this->set(self::RELATE_ID, $value);
    }

    /**
     * Returns value of 'relate_id' property
     *
     * @return integer
     */
    public function getRelateId()
    {
        $value = $this->get(self::RELATE_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'expire' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExpire($value)
    {
        return $this->set(self::EXPIRE, $value);
    }

    /**
     * Returns value of 'expire' property
     *
     * @return integer
     */
    public function getExpire()
    {
        $value = $this->get(self::EXPIRE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'max_counts' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxCounts($value)
    {
        return $this->set(self::MAX_COUNTS, $value);
    }

    /**
     * Returns value of 'max_counts' property
     *
     * @return integer
     */
    public function getMaxCounts()
    {
        $value = $this->get(self::MAX_COUNTS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'helpers' list
     *
     * @param \PB_LeagueHelper $value Value to append
     *
     * @return null
     */
    public function appendHelpers(\PB_LeagueHelper $value)
    {
        return $this->append(self::HELPERS, $value);
    }

    /**
     * Clears 'helpers' list
     *
     * @return null
     */
    public function clearHelpers()
    {
        return $this->clear(self::HELPERS);
    }

    /**
     * Returns 'helpers' list
     *
     * @return \PB_LeagueHelper[]
     */
    public function getHelpers()
    {
        return $this->get(self::HELPERS);
    }

    /**
     * Returns 'helpers' iterator
     *
     * @return \ArrayIterator
     */
    public function getHelpersIterator()
    {
        return new \ArrayIterator($this->get(self::HELPERS));
    }

    /**
     * Returns element from 'helpers' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_LeagueHelper
     */
    public function getHelpersAt($offset)
    {
        return $this->get(self::HELPERS, $offset);
    }

    /**
     * Returns count of 'helpers' list
     *
     * @return int
     */
    public function getHelpersCount()
    {
        return $this->count(self::HELPERS);
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
}
}