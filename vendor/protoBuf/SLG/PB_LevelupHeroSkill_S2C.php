<?php
/**
 * Auto generated from Hero.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LevelupHeroSkill_S2C message
 */
class PB_LevelupHeroSkill_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const LEVELUP_TIME = 1;
    const RESOURCE = 2;
    const HERO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LEVELUP_TIME => array(
            'name' => 'levelup_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RESOURCE => array(
            'name' => 'resource',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        $this->values[self::LEVELUP_TIME] = null;
        $this->values[self::RESOURCE] = array();
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
     * Sets value of 'levelup_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLevelupTime($value)
    {
        return $this->set(self::LEVELUP_TIME, $value);
    }

    /**
     * Returns value of 'levelup_time' property
     *
     * @return integer
     */
    public function getLevelupTime()
    {
        $value = $this->get(self::LEVELUP_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'resource' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendResource($value)
    {
        return $this->append(self::RESOURCE, $value);
    }

    /**
     * Clears 'resource' list
     *
     * @return null
     */
    public function clearResource()
    {
        return $this->clear(self::RESOURCE);
    }

    /**
     * Returns 'resource' list
     *
     * @return integer[]
     */
    public function getResource()
    {
        return $this->get(self::RESOURCE);
    }

    /**
     * Returns 'resource' iterator
     *
     * @return \ArrayIterator
     */
    public function getResourceIterator()
    {
        return new \ArrayIterator($this->get(self::RESOURCE));
    }

    /**
     * Returns element from 'resource' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getResourceAt($offset)
    {
        return $this->get(self::RESOURCE, $offset);
    }

    /**
     * Returns count of 'resource' list
     *
     * @return int
     */
    public function getResourceCount()
    {
        return $this->count(self::RESOURCE);
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