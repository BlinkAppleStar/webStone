<?php
/**
 * Auto generated from Gamer.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetPowerLeaderboard_S2C message
 */
class PB_GamerGetPowerLeaderboard_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const START = 1;
    const END = 2;
    const SELF_RANK = 3;
    const GAMERS = 4;
    const LEAGUE_SHORT_NAME = 5;

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
        self::GAMERS => array(
            'name' => 'gamers',
            'repeated' => true,
            'type' => '\PB_Gamer'
        ),
        self::LEAGUE_SHORT_NAME => array(
            'name' => 'league_short_name',
            'repeated' => true,
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
        $this->values[self::START] = null;
        $this->values[self::END] = null;
        $this->values[self::SELF_RANK] = null;
        $this->values[self::GAMERS] = array();
        $this->values[self::LEAGUE_SHORT_NAME] = array();
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
     * Appends value to 'gamers' list
     *
     * @param \PB_Gamer $value Value to append
     *
     * @return null
     */
    public function appendGamers(\PB_Gamer $value)
    {
        return $this->append(self::GAMERS, $value);
    }

    /**
     * Clears 'gamers' list
     *
     * @return null
     */
    public function clearGamers()
    {
        return $this->clear(self::GAMERS);
    }

    /**
     * Returns 'gamers' list
     *
     * @return \PB_Gamer[]
     */
    public function getGamers()
    {
        return $this->get(self::GAMERS);
    }

    /**
     * Returns 'gamers' iterator
     *
     * @return \ArrayIterator
     */
    public function getGamersIterator()
    {
        return new \ArrayIterator($this->get(self::GAMERS));
    }

    /**
     * Returns element from 'gamers' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Gamer
     */
    public function getGamersAt($offset)
    {
        return $this->get(self::GAMERS, $offset);
    }

    /**
     * Returns count of 'gamers' list
     *
     * @return int
     */
    public function getGamersCount()
    {
        return $this->count(self::GAMERS);
    }

    /**
     * Appends value to 'league_short_name' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendLeagueShortName($value)
    {
        return $this->append(self::LEAGUE_SHORT_NAME, $value);
    }

    /**
     * Clears 'league_short_name' list
     *
     * @return null
     */
    public function clearLeagueShortName()
    {
        return $this->clear(self::LEAGUE_SHORT_NAME);
    }

    /**
     * Returns 'league_short_name' list
     *
     * @return string[]
     */
    public function getLeagueShortName()
    {
        return $this->get(self::LEAGUE_SHORT_NAME);
    }

    /**
     * Returns 'league_short_name' iterator
     *
     * @return \ArrayIterator
     */
    public function getLeagueShortNameIterator()
    {
        return new \ArrayIterator($this->get(self::LEAGUE_SHORT_NAME));
    }

    /**
     * Returns element from 'league_short_name' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getLeagueShortNameAt($offset)
    {
        return $this->get(self::LEAGUE_SHORT_NAME, $offset);
    }

    /**
     * Returns count of 'league_short_name' list
     *
     * @return int
     */
    public function getLeagueShortNameCount()
    {
        return $this->count(self::LEAGUE_SHORT_NAME);
    }
}
}