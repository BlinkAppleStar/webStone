<?php
/**
 * Auto generated from Gamer.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetInfo_S2C message
 */
class PB_GamerGetInfo_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const GAMERS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAMERS => array(
            'name' => 'gamers',
            'repeated' => true,
            'type' => '\PB_GamerShortInfo'
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
        $this->values[self::GAMERS] = array();
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
     * Appends value to 'gamers' list
     *
     * @param \PB_GamerShortInfo $value Value to append
     *
     * @return null
     */
    public function appendGamers(\PB_GamerShortInfo $value)
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
     * @return \PB_GamerShortInfo[]
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
     * @return \PB_GamerShortInfo
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
}
}