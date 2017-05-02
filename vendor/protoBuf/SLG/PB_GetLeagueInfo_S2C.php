<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GetLeagueInfo_S2C message
 */
class PB_GetLeagueInfo_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const LEAGUE = 1;
    const GAMERS = 2;
    const CITY_LEVEL = 3;
    const OFFLINE_TIME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LEAGUE => array(
            'name' => 'league',
            'required' => false,
            'type' => '\PB_League'
        ),
        self::GAMERS => array(
            'name' => 'gamers',
            'repeated' => true,
            'type' => '\PB_Gamer'
        ),
        self::CITY_LEVEL => array(
            'name' => 'city_level',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OFFLINE_TIME => array(
            'name' => 'offline_time',
            'repeated' => true,
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
        $this->values[self::LEAGUE] = null;
        $this->values[self::GAMERS] = array();
        $this->values[self::CITY_LEVEL] = array();
        $this->values[self::OFFLINE_TIME] = array();
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
     * Sets value of 'league' property
     *
     * @param \PB_League $value Property value
     *
     * @return null
     */
    public function setLeague(\PB_League $value=null)
    {
        return $this->set(self::LEAGUE, $value);
    }

    /**
     * Returns value of 'league' property
     *
     * @return \PB_League
     */
    public function getLeague()
    {
        return $this->get(self::LEAGUE);
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
     * Appends value to 'city_level' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendCityLevel($value)
    {
        return $this->append(self::CITY_LEVEL, $value);
    }

    /**
     * Clears 'city_level' list
     *
     * @return null
     */
    public function clearCityLevel()
    {
        return $this->clear(self::CITY_LEVEL);
    }

    /**
     * Returns 'city_level' list
     *
     * @return integer[]
     */
    public function getCityLevel()
    {
        return $this->get(self::CITY_LEVEL);
    }

    /**
     * Returns 'city_level' iterator
     *
     * @return \ArrayIterator
     */
    public function getCityLevelIterator()
    {
        return new \ArrayIterator($this->get(self::CITY_LEVEL));
    }

    /**
     * Returns element from 'city_level' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getCityLevelAt($offset)
    {
        return $this->get(self::CITY_LEVEL, $offset);
    }

    /**
     * Returns count of 'city_level' list
     *
     * @return int
     */
    public function getCityLevelCount()
    {
        return $this->count(self::CITY_LEVEL);
    }

    /**
     * Appends value to 'offline_time' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendOfflineTime($value)
    {
        return $this->append(self::OFFLINE_TIME, $value);
    }

    /**
     * Clears 'offline_time' list
     *
     * @return null
     */
    public function clearOfflineTime()
    {
        return $this->clear(self::OFFLINE_TIME);
    }

    /**
     * Returns 'offline_time' list
     *
     * @return integer[]
     */
    public function getOfflineTime()
    {
        return $this->get(self::OFFLINE_TIME);
    }

    /**
     * Returns 'offline_time' iterator
     *
     * @return \ArrayIterator
     */
    public function getOfflineTimeIterator()
    {
        return new \ArrayIterator($this->get(self::OFFLINE_TIME));
    }

    /**
     * Returns element from 'offline_time' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getOfflineTimeAt($offset)
    {
        return $this->get(self::OFFLINE_TIME, $offset);
    }

    /**
     * Returns count of 'offline_time' list
     *
     * @return int
     */
    public function getOfflineTimeCount()
    {
        return $this->count(self::OFFLINE_TIME);
    }
}
}