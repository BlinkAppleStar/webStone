<?php
/**
 * Auto generated from Mail.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerReadMail_C2S message
 */
class PB_GamerReadMail_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const MAIL_IDS = 2;
    const TALKER_IDS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAIL_IDS => array(
            'name' => 'mail_ids',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        $this->values[self::ID] = null;
        $this->values[self::MAIL_IDS] = array();
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
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'mail_ids' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendMailIds($value)
    {
        return $this->append(self::MAIL_IDS, $value);
    }

    /**
     * Clears 'mail_ids' list
     *
     * @return null
     */
    public function clearMailIds()
    {
        return $this->clear(self::MAIL_IDS);
    }

    /**
     * Returns 'mail_ids' list
     *
     * @return integer[]
     */
    public function getMailIds()
    {
        return $this->get(self::MAIL_IDS);
    }

    /**
     * Returns 'mail_ids' iterator
     *
     * @return \ArrayIterator
     */
    public function getMailIdsIterator()
    {
        return new \ArrayIterator($this->get(self::MAIL_IDS));
    }

    /**
     * Returns element from 'mail_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getMailIdsAt($offset)
    {
        return $this->get(self::MAIL_IDS, $offset);
    }

    /**
     * Returns count of 'mail_ids' list
     *
     * @return int
     */
    public function getMailIdsCount()
    {
        return $this->count(self::MAIL_IDS);
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