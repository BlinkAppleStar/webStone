<?php
/**
 * Auto generated from Map.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerMapLook_S2C message
 */
class PB_GamerMapLook_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const MONSTER = 1;
    const GAMER = 2;
    const RESOURCE = 3;
    const COMBAT = 4;
    const PROTECT_WAR_TIME = 5;
    const PROTECT_SPY_TIME = 6;
    const TERRAINS = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MONSTER => array(
            'name' => 'monster',
            'repeated' => true,
            'type' => '\PB_Monster'
        ),
        self::GAMER => array(
            'name' => 'gamer',
            'repeated' => true,
            'type' => '\PB_Gamer'
        ),
        self::RESOURCE => array(
            'name' => 'resource',
            'repeated' => true,
            'type' => '\PB_Resource'
        ),
        self::COMBAT => array(
            'name' => 'combat',
            'repeated' => true,
            'type' => '\PB_Combat'
        ),
        self::PROTECT_WAR_TIME => array(
            'name' => 'protect_war_time',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PROTECT_SPY_TIME => array(
            'name' => 'protect_spy_time',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TERRAINS => array(
            'name' => 'terrains',
            'repeated' => true,
            'type' => '\PB_Terrain'
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
        $this->values[self::MONSTER] = array();
        $this->values[self::GAMER] = array();
        $this->values[self::RESOURCE] = array();
        $this->values[self::COMBAT] = array();
        $this->values[self::PROTECT_WAR_TIME] = array();
        $this->values[self::PROTECT_SPY_TIME] = array();
        $this->values[self::TERRAINS] = array();
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
     * Appends value to 'monster' list
     *
     * @param \PB_Monster $value Value to append
     *
     * @return null
     */
    public function appendMonster(\PB_Monster $value)
    {
        return $this->append(self::MONSTER, $value);
    }

    /**
     * Clears 'monster' list
     *
     * @return null
     */
    public function clearMonster()
    {
        return $this->clear(self::MONSTER);
    }

    /**
     * Returns 'monster' list
     *
     * @return \PB_Monster[]
     */
    public function getMonster()
    {
        return $this->get(self::MONSTER);
    }

    /**
     * Returns 'monster' iterator
     *
     * @return \ArrayIterator
     */
    public function getMonsterIterator()
    {
        return new \ArrayIterator($this->get(self::MONSTER));
    }

    /**
     * Returns element from 'monster' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Monster
     */
    public function getMonsterAt($offset)
    {
        return $this->get(self::MONSTER, $offset);
    }

    /**
     * Returns count of 'monster' list
     *
     * @return int
     */
    public function getMonsterCount()
    {
        return $this->count(self::MONSTER);
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
     * Appends value to 'resource' list
     *
     * @param \PB_Resource $value Value to append
     *
     * @return null
     */
    public function appendResource(\PB_Resource $value)
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
     * @return \PB_Resource[]
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
     * @return \PB_Resource
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
     * Appends value to 'combat' list
     *
     * @param \PB_Combat $value Value to append
     *
     * @return null
     */
    public function appendCombat(\PB_Combat $value)
    {
        return $this->append(self::COMBAT, $value);
    }

    /**
     * Clears 'combat' list
     *
     * @return null
     */
    public function clearCombat()
    {
        return $this->clear(self::COMBAT);
    }

    /**
     * Returns 'combat' list
     *
     * @return \PB_Combat[]
     */
    public function getCombat()
    {
        return $this->get(self::COMBAT);
    }

    /**
     * Returns 'combat' iterator
     *
     * @return \ArrayIterator
     */
    public function getCombatIterator()
    {
        return new \ArrayIterator($this->get(self::COMBAT));
    }

    /**
     * Returns element from 'combat' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Combat
     */
    public function getCombatAt($offset)
    {
        return $this->get(self::COMBAT, $offset);
    }

    /**
     * Returns count of 'combat' list
     *
     * @return int
     */
    public function getCombatCount()
    {
        return $this->count(self::COMBAT);
    }

    /**
     * Appends value to 'protect_war_time' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendProtectWarTime($value)
    {
        return $this->append(self::PROTECT_WAR_TIME, $value);
    }

    /**
     * Clears 'protect_war_time' list
     *
     * @return null
     */
    public function clearProtectWarTime()
    {
        return $this->clear(self::PROTECT_WAR_TIME);
    }

    /**
     * Returns 'protect_war_time' list
     *
     * @return integer[]
     */
    public function getProtectWarTime()
    {
        return $this->get(self::PROTECT_WAR_TIME);
    }

    /**
     * Returns 'protect_war_time' iterator
     *
     * @return \ArrayIterator
     */
    public function getProtectWarTimeIterator()
    {
        return new \ArrayIterator($this->get(self::PROTECT_WAR_TIME));
    }

    /**
     * Returns element from 'protect_war_time' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getProtectWarTimeAt($offset)
    {
        return $this->get(self::PROTECT_WAR_TIME, $offset);
    }

    /**
     * Returns count of 'protect_war_time' list
     *
     * @return int
     */
    public function getProtectWarTimeCount()
    {
        return $this->count(self::PROTECT_WAR_TIME);
    }

    /**
     * Appends value to 'protect_spy_time' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendProtectSpyTime($value)
    {
        return $this->append(self::PROTECT_SPY_TIME, $value);
    }

    /**
     * Clears 'protect_spy_time' list
     *
     * @return null
     */
    public function clearProtectSpyTime()
    {
        return $this->clear(self::PROTECT_SPY_TIME);
    }

    /**
     * Returns 'protect_spy_time' list
     *
     * @return integer[]
     */
    public function getProtectSpyTime()
    {
        return $this->get(self::PROTECT_SPY_TIME);
    }

    /**
     * Returns 'protect_spy_time' iterator
     *
     * @return \ArrayIterator
     */
    public function getProtectSpyTimeIterator()
    {
        return new \ArrayIterator($this->get(self::PROTECT_SPY_TIME));
    }

    /**
     * Returns element from 'protect_spy_time' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getProtectSpyTimeAt($offset)
    {
        return $this->get(self::PROTECT_SPY_TIME, $offset);
    }

    /**
     * Returns count of 'protect_spy_time' list
     *
     * @return int
     */
    public function getProtectSpyTimeCount()
    {
        return $this->count(self::PROTECT_SPY_TIME);
    }

    /**
     * Appends value to 'terrains' list
     *
     * @param \PB_Terrain $value Value to append
     *
     * @return null
     */
    public function appendTerrains(\PB_Terrain $value)
    {
        return $this->append(self::TERRAINS, $value);
    }

    /**
     * Clears 'terrains' list
     *
     * @return null
     */
    public function clearTerrains()
    {
        return $this->clear(self::TERRAINS);
    }

    /**
     * Returns 'terrains' list
     *
     * @return \PB_Terrain[]
     */
    public function getTerrains()
    {
        return $this->get(self::TERRAINS);
    }

    /**
     * Returns 'terrains' iterator
     *
     * @return \ArrayIterator
     */
    public function getTerrainsIterator()
    {
        return new \ArrayIterator($this->get(self::TERRAINS));
    }

    /**
     * Returns element from 'terrains' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Terrain
     */
    public function getTerrainsAt($offset)
    {
        return $this->get(self::TERRAINS, $offset);
    }

    /**
     * Returns count of 'terrains' list
     *
     * @return int
     */
    public function getTerrainsCount()
    {
        return $this->count(self::TERRAINS);
    }
}
}