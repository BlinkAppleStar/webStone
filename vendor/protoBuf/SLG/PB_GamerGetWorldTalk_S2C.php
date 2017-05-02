<?php
/**
 * Auto generated from GamerFriends.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetWorldTalk_S2C message
 */
class PB_GamerGetWorldTalk_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const TALK = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TALK => array(
            'name' => 'talk',
            'repeated' => true,
            'type' => '\PB_WorldTalk'
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
        $this->values[self::TALK] = array();
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
     * Appends value to 'talk' list
     *
     * @param \PB_WorldTalk $value Value to append
     *
     * @return null
     */
    public function appendTalk(\PB_WorldTalk $value)
    {
        return $this->append(self::TALK, $value);
    }

    /**
     * Clears 'talk' list
     *
     * @return null
     */
    public function clearTalk()
    {
        return $this->clear(self::TALK);
    }

    /**
     * Returns 'talk' list
     *
     * @return \PB_WorldTalk[]
     */
    public function getTalk()
    {
        return $this->get(self::TALK);
    }

    /**
     * Returns 'talk' iterator
     *
     * @return \ArrayIterator
     */
    public function getTalkIterator()
    {
        return new \ArrayIterator($this->get(self::TALK));
    }

    /**
     * Returns element from 'talk' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_WorldTalk
     */
    public function getTalkAt($offset)
    {
        return $this->get(self::TALK, $offset);
    }

    /**
     * Returns count of 'talk' list
     *
     * @return int
     */
    public function getTalkCount()
    {
        return $this->count(self::TALK);
    }
}
}