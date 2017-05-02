<?php
/**
 * Auto generated from Hero.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_RefreshHero_S2C message
 */
class PB_RefreshHero_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const HERO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HERO => array(
            'name' => 'hero',
            'repeated' => true,
            'type' => '\PB_Hero'
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
        $this->values[self::HERO] = array();
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
     * Appends value to 'hero' list
     *
     * @param \PB_Hero $value Value to append
     *
     * @return null
     */
    public function appendHero(\PB_Hero $value)
    {
        return $this->append(self::HERO, $value);
    }

    /**
     * Clears 'hero' list
     *
     * @return null
     */
    public function clearHero()
    {
        return $this->clear(self::HERO);
    }

    /**
     * Returns 'hero' list
     *
     * @return \PB_Hero[]
     */
    public function getHero()
    {
        return $this->get(self::HERO);
    }

    /**
     * Returns 'hero' iterator
     *
     * @return \ArrayIterator
     */
    public function getHeroIterator()
    {
        return new \ArrayIterator($this->get(self::HERO));
    }

    /**
     * Returns element from 'hero' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Hero
     */
    public function getHeroAt($offset)
    {
        return $this->get(self::HERO, $offset);
    }

    /**
     * Returns count of 'hero' list
     *
     * @return int
     */
    public function getHeroCount()
    {
        return $this->count(self::HERO);
    }
}
}