<?php
/**
 * Auto generated from Mail.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerSendMail_S2C message
 */
class PB_GamerSendMail_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const TALKER_IDS = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TALKER_IDS => array(
            'name' => 'talker_ids',
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
        $this->values[self::TALKER_IDS] = array();
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
     * Appends value to 'talker_ids' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendTalkerIds($value)
    {
        return $this->append(self::TALKER_IDS, $value);
    }

    /**
     * Clears 'talker_ids' list
     *
     * @return null
     */
    public function clearTalkerIds()
    {
        return $this->clear(self::TALKER_IDS);
    }

    /**
     * Returns 'talker_ids' list
     *
     * @return integer[]
     */
    public function getTalkerIds()
    {
        return $this->get(self::TALKER_IDS);
    }

    /**
     * Returns 'talker_ids' iterator
     *
     * @return \ArrayIterator
     */
    public function getTalkerIdsIterator()
    {
        return new \ArrayIterator($this->get(self::TALKER_IDS));
    }

    /**
     * Returns element from 'talker_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getTalkerIdsAt($offset)
    {
        return $this->get(self::TALKER_IDS, $offset);
    }

    /**
     * Returns count of 'talker_ids' list
     *
     * @return int
     */
    public function getTalkerIdsCount()
    {
        return $this->count(self::TALKER_IDS);
    }
}
}