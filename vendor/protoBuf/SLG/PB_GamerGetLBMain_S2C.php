<?php
/**
 * Auto generated from Gamer.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetLBMain_S2C message
 */
class PB_GamerGetLBMain_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const START = 1;
    const END = 2;
    const MAIN = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::START => array(
            'name' => 'start',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::END => array(
            'name' => 'end',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAIN => array(
            'name' => 'main',
            'repeated' => true,
            'type' => '\PB_Gamer'
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
        $this->values[self::START] = null;
        $this->values[self::END] = null;
        $this->values[self::MAIN] = array();
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
     * Sets value of 'start' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStart($value)
    {
        return $this->set(self::START, $value);
    }

    /**
     * Returns value of 'start' property
     *
     * @return integer
     */
    public function getStart()
    {
        $value = $this->get(self::START);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'end' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEnd($value)
    {
        return $this->set(self::END, $value);
    }

    /**
     * Returns value of 'end' property
     *
     * @return integer
     */
    public function getEnd()
    {
        $value = $this->get(self::END);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'main' list
     *
     * @param \PB_Gamer $value Value to append
     *
     * @return null
     */
    public function appendMain(\PB_Gamer $value)
    {
        return $this->append(self::MAIN, $value);
    }

    /**
     * Clears 'main' list
     *
     * @return null
     */
    public function clearMain()
    {
        return $this->clear(self::MAIN);
    }

    /**
     * Returns 'main' list
     *
     * @return \PB_Gamer[]
     */
    public function getMain()
    {
        return $this->get(self::MAIN);
    }

    /**
     * Returns 'main' iterator
     *
     * @return \ArrayIterator
     */
    public function getMainIterator()
    {
        return new \ArrayIterator($this->get(self::MAIN));
    }

    /**
     * Returns element from 'main' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Gamer
     */
    public function getMainAt($offset)
    {
        return $this->get(self::MAIN, $offset);
    }

    /**
     * Returns count of 'main' list
     *
     * @return int
     */
    public function getMainCount()
    {
        return $this->count(self::MAIN);
    }
}
}