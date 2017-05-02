<?php
/**
 * Auto generated from Hero.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LevelupHeroSkill_C2S message
 */
class PB_LevelupHeroSkill_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const HERO_ID = 2;
    const SKILL_ID = 3;
    const DIRECT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HERO_ID => array(
            'name' => 'hero_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SKILL_ID => array(
            'name' => 'skill_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DIRECT => array(
            'name' => 'direct',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::HERO_ID] = null;
        $this->values[self::SKILL_ID] = null;
        $this->values[self::DIRECT] = null;
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
     * Sets value of 'hero_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHeroId($value)
    {
        return $this->set(self::HERO_ID, $value);
    }

    /**
     * Returns value of 'hero_id' property
     *
     * @return integer
     */
    public function getHeroId()
    {
        $value = $this->get(self::HERO_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'skill_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSkillId($value)
    {
        return $this->set(self::SKILL_ID, $value);
    }

    /**
     * Returns value of 'skill_id' property
     *
     * @return integer
     */
    public function getSkillId()
    {
        $value = $this->get(self::SKILL_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'direct' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDirect($value)
    {
        return $this->set(self::DIRECT, $value);
    }

    /**
     * Returns value of 'direct' property
     *
     * @return boolean
     */
    public function getDirect()
    {
        $value = $this->get(self::DIRECT);
        return $value === null ? (boolean)$value : $value;
    }
}
}