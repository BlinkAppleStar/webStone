<?php
/**
 * Auto generated from Hero.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_SetHeroJob_S2C message
 */
class PB_SetHeroJob_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const JOB_HERO = 2;
    const REPLACE_HERO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::JOB_HERO => array(
            'name' => 'job_hero',
            'required' => false,
            'type' => '\PB_Hero'
        ),
        self::REPLACE_HERO => array(
            'name' => 'replace_hero',
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
        $this->values[self::ID] = null;
        $this->values[self::JOB_HERO] = null;
        $this->values[self::REPLACE_HERO] = null;
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
     * Sets value of 'job_hero' property
     *
     * @param \PB_Hero $value Property value
     *
     * @return null
     */
    public function setJobHero(\PB_Hero $value=null)
    {
        return $this->set(self::JOB_HERO, $value);
    }

    /**
     * Returns value of 'job_hero' property
     *
     * @return \PB_Hero
     */
    public function getJobHero()
    {
        return $this->get(self::JOB_HERO);
    }

    /**
     * Sets value of 'replace_hero' property
     *
     * @param \PB_Hero $value Property value
     *
     * @return null
     */
    public function setReplaceHero(\PB_Hero $value=null)
    {
        return $this->set(self::REPLACE_HERO, $value);
    }

    /**
     * Returns value of 'replace_hero' property
     *
     * @return \PB_Hero
     */
    public function getReplaceHero()
    {
        return $this->get(self::REPLACE_HERO);
    }
}
}