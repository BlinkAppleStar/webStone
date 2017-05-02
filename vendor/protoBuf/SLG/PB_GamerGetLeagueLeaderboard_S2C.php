<?php
/**
 * Auto generated from Gamer.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetLeagueLeaderboard_S2C message
 */
class PB_GamerGetLeagueLeaderboard_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const START = 1;
    const END = 2;
    const SELF_RANK = 3;
    const LEAGUES = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::START => array(
            'name' => 'start',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::END => array(
            'name' => 'end',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SELF_RANK => array(
            'name' => 'self_rank',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEAGUES => array(
            'name' => 'leagues',
            'repeated' => true,
            'type' => '\PB_League'
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
        $this->values[self::START] = null;
        $this->values[self::END] = null;
        $this->values[self::SELF_RANK] = null;
        $this->values[self::LEAGUES] = array();
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
     * Sets value of 'start' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStart($value)
    {
        return $this->set(self::START, $value);
    }

    /**
     * Returns value of 'start' property
     *
     * @return integer
     */
    public function getStart()
    {
        $value = $this->get(self::START);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'end' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEnd($value)
    {
        return $this->set(self::END, $value);
    }

    /**
     * Returns value of 'end' property
     *
     * @return integer
     */
    public function getEnd()
    {
        $value = $this->get(self::END);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'self_rank' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSelfRank($value)
    {
        return $this->set(self::SELF_RANK, $value);
    }

    /**
     * Returns value of 'self_rank' property
     *
     * @return integer
     */
    public function getSelfRank()
    {
        $value = $this->get(self::SELF_RANK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'leagues' list
     *
     * @param \PB_League $value Value to append
     *
     * @return null
     */
    public function appendLeagues(\PB_League $value)
    {
        return $this->append(self::LEAGUES, $value);
    }

    /**
     * Clears 'leagues' list
     *
     * @return null
     */
    public function clearLeagues()
    {
        return $this->clear(self::LEAGUES);
    }

    /**
     * Returns 'leagues' list
     *
     * @return \PB_League[]
     */
    public function getLeagues()
    {
        return $this->get(self::LEAGUES);
    }

    /**
     * Returns 'leagues' iterator
     *
     * @return \ArrayIterator
     */
    public function getLeaguesIterator()
    {
        return new \ArrayIterator($this->get(self::LEAGUES));
    }

    /**
     * Returns element from 'leagues' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_League
     */
    public function getLeaguesAt($offset)
    {
        return $this->get(self::LEAGUES, $offset);
    }

    /**
     * Returns count of 'leagues' list
     *
     * @return int
     */
    public function getLeaguesCount()
    {
        return $this->count(self::LEAGUES);
    }
}
}