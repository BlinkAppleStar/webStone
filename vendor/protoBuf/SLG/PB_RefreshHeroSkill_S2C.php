<?php
/**
 * Auto generated from Hero.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_RefreshHeroSkill_S2C message
 */
class PB_RefreshHeroSkill_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const HERO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HERO => array(
            'name' => 'hero',
            'required' => false,
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
        $this->values[self::HERO] = null;
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
     * Sets value of 'hero' property
     *
     * @param \PB_Hero $value Property value
     *
     * @return null
     */
    public function setHero(\PB_Hero $value=null)
    {
        return $this->set(self::HERO, $value);
    }

    /**
     * Returns value of 'hero' property
     *
     * @return \PB_Hero
     */
    public function getHero()
    {
        return $this->get(self::HERO);
    }
}
}