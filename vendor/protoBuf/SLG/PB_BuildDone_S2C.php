<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_BuildDone_S2C message
 */
class PB_BuildDone_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const BUILD = 1;
    const RESOURCE = 2;
    const CITY_HP = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BUILD => array(
            'name' => 'build',
            'required' => false,
            'type' => '\PB_Build'
        ),
        self::RESOURCE => array(
            'name' => 'resource',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CITY_HP => array(
            'name' => 'city_hp',
            'required' => false,
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
        $this->values[self::BUILD] = null;
        $this->values[self::RESOURCE] = array();
        $this->values[self::CITY_HP] = null;
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
     * Sets value of 'build' property
     *
     * @param \PB_Build $value Property value
     *
     * @return null
     */
    public function setBuild(\PB_Build $value=null)
    {
        return $this->set(self::BUILD, $value);
    }

    /**
     * Returns value of 'build' property
     *
     * @return \PB_Build
     */
    public function getBuild()
    {
        return $this->get(self::BUILD);
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
     * Sets value of 'city_hp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCityHp($value)
    {
        return $this->set(self::CITY_HP, $value);
    }

    /**
     * Returns value of 'city_hp' property
     *
     * @return integer
     */
    public function getCityHp()
    {
        $value = $this->get(self::CITY_HP);
        return $value === null ? (integer)$value : $value;
    }
}
}