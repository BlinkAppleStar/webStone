<?php
/**
 * Auto generated from Tech.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerListTech_S2C message
 */
class PB_GamerListTech_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const ALL_TECH = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ALL_TECH => array(
            'name' => 'all_tech',
            'repeated' => true,
            'type' => '\PB_Tech'
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
        $this->values[self::ALL_TECH] = array();
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
     * Appends value to 'all_tech' list
     *
     * @param \PB_Tech $value Value to append
     *
     * @return null
     */
    public function appendAllTech(\PB_Tech $value)
    {
        return $this->append(self::ALL_TECH, $value);
    }

    /**
     * Clears 'all_tech' list
     *
     * @return null
     */
    public function clearAllTech()
    {
        return $this->clear(self::ALL_TECH);
    }

    /**
     * Returns 'all_tech' list
     *
     * @return \PB_Tech[]
     */
    public function getAllTech()
    {
        return $this->get(self::ALL_TECH);
    }

    /**
     * Returns 'all_tech' iterator
     *
     * @return \ArrayIterator
     */
    public function getAllTechIterator()
    {
        return new \ArrayIterator($this->get(self::ALL_TECH));
    }

    /**
     * Returns element from 'all_tech' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Tech
     */
    public function getAllTechAt($offset)
    {
        return $this->get(self::ALL_TECH, $offset);
    }

    /**
     * Returns count of 'all_tech' list
     *
     * @return int
     */
    public function getAllTechCount()
    {
        return $this->count(self::ALL_TECH);
    }
}
}