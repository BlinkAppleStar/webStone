<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LeagueTempleInfo message
 */
class PB_LeagueTempleInfo extends \ProtobufMessage
{
    /* Field index constants */
    const LEAGUE_ID = 1;
    const CURRENT_FLOOR = 2;
    const CURRENT_ID = 3;
    const CURRENT_POINT = 4;
    const FLOOR_IDS = 5;
    const CHOICE_GAMER_NAME = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LEAGUE_ID => array(
            'name' => 'league_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURRENT_FLOOR => array(
            'name' => 'current_floor',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURRENT_ID => array(
            'name' => 'current_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURRENT_POINT => array(
            'name' => 'current_point',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FLOOR_IDS => array(
            'name' => 'floor_ids',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHOICE_GAMER_NAME => array(
            'name' => 'choice_gamer_name',
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
        $this->values[self::LEAGUE_ID] = null;
        $this->values[self::CURRENT_FLOOR] = null;
        $this->values[self::CURRENT_ID] = null;
        $this->values[self::CURRENT_POINT] = null;
        $this->values[self::FLOOR_IDS] = array();
        $this->values[self::CHOICE_GAMER_NAME] = null;
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
     * Sets value of 'current_floor' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurrentFloor($value)
    {
        return $this->set(self::CURRENT_FLOOR, $value);
    }

    /**
     * Returns value of 'current_floor' property
     *
     * @return integer
     */
    public function getCurrentFloor()
    {
        $value = $this->get(self::CURRENT_FLOOR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'current_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurrentId($value)
    {
        return $this->set(self::CURRENT_ID, $value);
    }

    /**
     * Returns value of 'current_id' property
     *
     * @return integer
     */
    public function getCurrentId()
    {
        $value = $this->get(self::CURRENT_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'current_point' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurrentPoint($value)
    {
        return $this->set(self::CURRENT_POINT, $value);
    }

    /**
     * Returns value of 'current_point' property
     *
     * @return integer
     */
    public function getCurrentPoint()
    {
        $value = $this->get(self::CURRENT_POINT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'floor_ids' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendFloorIds($value)
    {
        return $this->append(self::FLOOR_IDS, $value);
    }

    /**
     * Clears 'floor_ids' list
     *
     * @return null
     */
    public function clearFloorIds()
    {
        return $this->clear(self::FLOOR_IDS);
    }

    /**
     * Returns 'floor_ids' list
     *
     * @return integer[]
     */
    public function getFloorIds()
    {
        return $this->get(self::FLOOR_IDS);
    }

    /**
     * Returns 'floor_ids' iterator
     *
     * @return \ArrayIterator
     */
    public function getFloorIdsIterator()
    {
        return new \ArrayIterator($this->get(self::FLOOR_IDS));
    }

    /**
     * Returns element from 'floor_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getFloorIdsAt($offset)
    {
        return $this->get(self::FLOOR_IDS, $offset);
    }

    /**
     * Returns count of 'floor_ids' list
     *
     * @return int
     */
    public function getFloorIdsCount()
    {
        return $this->count(self::FLOOR_IDS);
    }

    /**
     * Sets value of 'choice_gamer_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChoiceGamerName($value)
    {
        return $this->set(self::CHOICE_GAMER_NAME, $value);
    }

    /**
     * Returns value of 'choice_gamer_name' property
     *
     * @return string
     */
    public function getChoiceGamerName()
    {
        $value = $this->get(self::CHOICE_GAMER_NAME);
        return $value === null ? (string)$value : $value;
    }
}
}