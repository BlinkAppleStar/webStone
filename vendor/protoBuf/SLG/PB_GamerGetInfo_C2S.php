<?php
/**
 * Auto generated from Gamer.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetInfo_C2S message
 */
class PB_GamerGetInfo_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const OTHER_ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OTHER_ID => array(
            'name' => 'other_id',
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
        $this->values[self::OTHER_ID] = array();
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
     * Appends value to 'other_id' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendOtherId($value)
    {
        return $this->append(self::OTHER_ID, $value);
    }

    /**
     * Clears 'other_id' list
     *
     * @return null
     */
    public function clearOtherId()
    {
        return $this->clear(self::OTHER_ID);
    }

    /**
     * Returns 'other_id' list
     *
     * @return integer[]
     */
    public function getOtherId()
    {
        return $this->get(self::OTHER_ID);
    }

    /**
     * Returns 'other_id' iterator
     *
     * @return \ArrayIterator
     */
    public function getOtherIdIterator()
    {
        return new \ArrayIterator($this->get(self::OTHER_ID));
    }

    /**
     * Returns element from 'other_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getOtherIdAt($offset)
    {
        return $this->get(self::OTHER_ID, $offset);
    }

    /**
     * Returns count of 'other_id' list
     *
     * @return int
     */
    public function getOtherIdCount()
    {
        return $this->count(self::OTHER_ID);
    }
}
}