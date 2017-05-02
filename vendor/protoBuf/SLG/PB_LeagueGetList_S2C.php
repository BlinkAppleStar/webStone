<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LeagueGetList_S2C message
 */
class PB_LeagueGetList_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const LEAGUES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
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