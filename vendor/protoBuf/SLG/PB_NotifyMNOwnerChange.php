<?php
/**
 * Auto generated from Map.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_NotifyMNOwnerChange message
 */
class PB_NotifyMNOwnerChange extends \ProtobufMessage
{
    /* Field index constants */
    const MONSTER = 1;
    const GAMER = 2;
    const RESOURCE = 3;
    const PROTECT_WAR_TIME = 4;
    const OWNER = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MONSTER => array(
            'name' => 'monster',
            'required' => false,
            'type' => '\PB_Monster'
        ),
        self::GAMER => array(
            'name' => 'gamer',
            'required' => false,
            'type' => '\PB_Gamer'
        ),
        self::RESOURCE => array(
            'name' => 'resource',
            'required' => false,
            'type' => '\PB_Resource'
        ),
        self::PROTECT_WAR_TIME => array(
            'name' => 'protect_war_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OWNER => array(
            'name' => 'owner',
            'required' => false,
            'type' => '\PB_MNOwner'
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
        $this->values[self::MONSTER] = null;
        $this->values[self::GAMER] = null;
        $this->values[self::RESOURCE] = null;
        $this->values[self::PROTECT_WAR_TIME] = null;
        $this->values[self::OWNER] = null;
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
     * Sets value of 'monster' property
     *
     * @param \PB_Monster $value Property value
     *
     * @return null
     */
    public function setMonster(\PB_Monster $value=null)
    {
        return $this->set(self::MONSTER, $value);
    }

    /**
     * Returns value of 'monster' property
     *
     * @return \PB_Monster
     */
    public function getMonster()
    {
        return $this->get(self::MONSTER);
    }

    /**
     * Sets value of 'gamer' property
     *
     * @param \PB_Gamer $value Property value
     *
     * @return null
     */
    public function setGamer(\PB_Gamer $value=null)
    {
        return $this->set(self::GAMER, $value);
    }

    /**
     * Returns value of 'gamer' property
     *
     * @return \PB_Gamer
     */
    public function getGamer()
    {
        return $this->get(self::GAMER);
    }

    /**
     * Sets value of 'resource' property
     *
     * @param \PB_Resource $value Property value
     *
     * @return null
     */
    public function setResource(\PB_Resource $value=null)
    {
        return $this->set(self::RESOURCE, $value);
    }

    /**
     * Returns value of 'resource' property
     *
     * @return \PB_Resource
     */
    public function getResource()
    {
        return $this->get(self::RESOURCE);
    }

    /**
     * Sets value of 'protect_war_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setProtectWarTime($value)
    {
        return $this->set(self::PROTECT_WAR_TIME, $value);
    }

    /**
     * Returns value of 'protect_war_time' property
     *
     * @return integer
     */
    public function getProtectWarTime()
    {
        $value = $this->get(self::PROTECT_WAR_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'owner' property
     *
     * @param \PB_MNOwner $value Property value
     *
     * @return null
     */
    public function setOwner(\PB_MNOwner $value=null)
    {
        return $this->set(self::OWNER, $value);
    }

    /**
     * Returns value of 'owner' property
     *
     * @return \PB_MNOwner
     */
    public function getOwner()
    {
        return $this->get(self::OWNER);
    }
}
}