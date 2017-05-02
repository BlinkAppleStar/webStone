<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_NotifyNewWorldTalk message
 */
class PB_NotifyNewWorldTalk extends \ProtobufMessage
{
    /* Field index constants */
    const TALKS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TALKS => array(
            'name' => 'talks',
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
        $this->values[self::TALKS] = array();
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
     * Appends value to 'talks' list
     *
     * @param \PB_WorldTalk $value Value to append
     *
     * @return null
     */
    public function appendTalks(\PB_WorldTalk $value)
    {
        return $this->append(self::TALKS, $value);
    }

    /**
     * Clears 'talks' list
     *
     * @return null
     */
    public function clearTalks()
    {
        return $this->clear(self::TALKS);
    }

    /**
     * Returns 'talks' list
     *
     * @return \PB_WorldTalk[]
     */
    public function getTalks()
    {
        return $this->get(self::TALKS);
    }

    /**
     * Returns 'talks' iterator
     *
     * @return \ArrayIterator
     */
    public function getTalksIterator()
    {
        return new \ArrayIterator($this->get(self::TALKS));
    }

    /**
     * Returns element from 'talks' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_WorldTalk
     */
    public function getTalksAt($offset)
    {
        return $this->get(self::TALKS, $offset);
    }

    /**
     * Returns count of 'talks' list
     *
     * @return int
     */
    public function getTalksCount()
    {
        return $this->count(self::TALKS);
    }
}
}