<?php
/**
 * Auto generated from GamerFriends.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetFriends_S2C message
 */
class PB_GamerGetFriends_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const GAMER = 1;
    const LEAGUE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAMER => array(
            'name' => 'gamer',
            'repeated' => true,
            'type' => '\PB_Gamer'
        ),
        self::LEAGUE => array(
            'name' => 'league',
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
        $this->values[self::GAMER] = array();
        $this->values[self::LEAGUE] = array();
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
     * Appends value to 'gamer' list
     *
     * @param \PB_Gamer $value Value to append
     *
     * @return null
     */
    public function appendGamer(\PB_Gamer $value)
    {
        return $this->append(self::GAMER, $value);
    }

    /**
     * Clears 'gamer' list
     *
     * @return null
     */
    public function clearGamer()
    {
        return $this->clear(self::GAMER);
    }

    /**
     * Returns 'gamer' list
     *
     * @return \PB_Gamer[]
     */
    public function getGamer()
    {
        return $this->get(self::GAMER);
    }

    /**
     * Returns 'gamer' iterator
     *
     * @return \ArrayIterator
     */
    public function getGamerIterator()
    {
        return new \ArrayIterator($this->get(self::GAMER));
    }

    /**
     * Returns element from 'gamer' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Gamer
     */
    public function getGamerAt($offset)
    {
        return $this->get(self::GAMER, $offset);
    }

    /**
     * Returns count of 'gamer' list
     *
     * @return int
     */
    public function getGamerCount()
    {
        return $this->count(self::GAMER);
    }

    /**
     * Appends value to 'league' list
     *
     * @param \PB_League $value Value to append
     *
     * @return null
     */
    public function appendLeague(\PB_League $value)
    {
        return $this->append(self::LEAGUE, $value);
    }

    /**
     * Clears 'league' list
     *
     * @return null
     */
    public function clearLeague()
    {
        return $this->clear(self::LEAGUE);
    }

    /**
     * Returns 'league' list
     *
     * @return \PB_League[]
     */
    public function getLeague()
    {
        return $this->get(self::LEAGUE);
    }

    /**
     * Returns 'league' iterator
     *
     * @return \ArrayIterator
     */
    public function getLeagueIterator()
    {
        return new \ArrayIterator($this->get(self::LEAGUE));
    }

    /**
     * Returns element from 'league' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_League
     */
    public function getLeagueAt($offset)
    {
        return $this->get(self::LEAGUE, $offset);
    }

    /**
     * Returns count of 'league' list
     *
     * @return int
     */
    public function getLeagueCount()
    {
        return $this->count(self::LEAGUE);
    }
}
}