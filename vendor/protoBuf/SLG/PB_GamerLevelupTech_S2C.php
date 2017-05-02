<?php
/**
 * Auto generated from Tech.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerLevelupTech_S2C message
 */
class PB_GamerLevelupTech_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const TECH = 1;
    const RESOURCE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TECH => array(
            'name' => 'tech',
            'required' => false,
            'type' => '\PB_Tech'
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
        $this->values[self::TECH] = null;
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
     * Sets value of 'tech' property
     *
     * @param \PB_Tech $value Property value
     *
     * @return null
     */
    public function setTech(\PB_Tech $value=null)
    {
        return $this->set(self::TECH, $value);
    }

    /**
     * Returns value of 'tech' property
     *
     * @return \PB_Tech
     */
    public function getTech()
    {
        return $this->get(self::TECH);
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