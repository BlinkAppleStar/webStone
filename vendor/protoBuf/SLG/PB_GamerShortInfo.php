<?php
/**
 * Auto generated from Gamer.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerShortInfo message
 */
class PB_GamerShortInfo extends \ProtobufMessage
{
    /* Field index constants */
    const MAIN = 1;
    const TECH = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MAIN => array(
            'name' => 'main',
            'required' => false,
            'type' => '\PB_Gamer'
        ),
        self::TECH => array(
            'name' => 'tech',
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
        $this->values[self::MAIN] = null;
        $this->values[self::TECH] = array();
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
     * Sets value of 'main' property
     *
     * @param \PB_Gamer $value Property value
     *
     * @return null
     */
    public function setMain(\PB_Gamer $value=null)
    {
        return $this->set(self::MAIN, $value);
    }

    /**
     * Returns value of 'main' property
     *
     * @return \PB_Gamer
     */
    public function getMain()
    {
        return $this->get(self::MAIN);
    }

    /**
     * Appends value to 'tech' list
     *
     * @param \PB_Tech $value Value to append
     *
     * @return null
     */
    public function appendTech(\PB_Tech $value)
    {
        return $this->append(self::TECH, $value);
    }

    /**
     * Clears 'tech' list
     *
     * @return null
     */
    public function clearTech()
    {
        return $this->clear(self::TECH);
    }

    /**
     * Returns 'tech' list
     *
     * @return \PB_Tech[]
     */
    public function getTech()
    {
        return $this->get(self::TECH);
    }

    /**
     * Returns 'tech' iterator
     *
     * @return \ArrayIterator
     */
    public function getTechIterator()
    {
        return new \ArrayIterator($this->get(self::TECH));
    }

    /**
     * Returns element from 'tech' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Tech
     */
    public function getTechAt($offset)
    {
        return $this->get(self::TECH, $offset);
    }

    /**
     * Returns count of 'tech' list
     *
     * @return int
     */
    public function getTechCount()
    {
        return $this->count(self::TECH);
    }
}
}