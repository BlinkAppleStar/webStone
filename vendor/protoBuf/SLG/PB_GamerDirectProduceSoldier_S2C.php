<?php
/**
 * Auto generated from Soldier.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerDirectProduceSoldier_S2C message
 */
class PB_GamerDirectProduceSoldier_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const SOLDIER = 1;
    const RESOURCE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SOLDIER => array(
            'name' => 'soldier',
            'repeated' => true,
            'type' => '\PB_Soldier'
        ),
        self::RESOURCE => array(
            'name' => 'resource',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::SOLDIER] = array();
        $this->values[self::RESOURCE] = array();
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
     * Appends value to 'soldier' list
     *
     * @param \PB_Soldier $value Value to append
     *
     * @return null
     */
    public function appendSoldier(\PB_Soldier $value)
    {
        return $this->append(self::SOLDIER, $value);
    }

    /**
     * Clears 'soldier' list
     *
     * @return null
     */
    public function clearSoldier()
    {
        return $this->clear(self::SOLDIER);
    }

    /**
     * Returns 'soldier' list
     *
     * @return \PB_Soldier[]
     */
    public function getSoldier()
    {
        return $this->get(self::SOLDIER);
    }

    /**
     * Returns 'soldier' iterator
     *
     * @return \ArrayIterator
     */
    public function getSoldierIterator()
    {
        return new \ArrayIterator($this->get(self::SOLDIER));
    }

    /**
     * Returns element from 'soldier' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Soldier
     */
    public function getSoldierAt($offset)
    {
        return $this->get(self::SOLDIER, $offset);
    }

    /**
     * Returns count of 'soldier' list
     *
     * @return int
     */
    public function getSoldierCount()
    {
        return $this->count(self::SOLDIER);
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
}
}