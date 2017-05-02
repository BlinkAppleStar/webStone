<?php
/**
 * Auto generated from Soldier.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerReliveSoldier_C2S message
 */
class PB_GamerReliveSoldier_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const DIRECT = 2;
    const SID = 3;
    const COUNT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DIRECT => array(
            'name' => 'direct',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SID => array(
            'name' => 'sid',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COUNT => array(
            'name' => 'count',
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
        $this->values[self::DIRECT] = null;
        $this->values[self::SID] = array();
        $this->values[self::COUNT] = array();
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
     * Sets value of 'direct' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDirect($value)
    {
        return $this->set(self::DIRECT, $value);
    }

    /**
     * Returns value of 'direct' property
     *
     * @return integer
     */
    public function getDirect()
    {
        $value = $this->get(self::DIRECT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'sid' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendSid($value)
    {
        return $this->append(self::SID, $value);
    }

    /**
     * Clears 'sid' list
     *
     * @return null
     */
    public function clearSid()
    {
        return $this->clear(self::SID);
    }

    /**
     * Returns 'sid' list
     *
     * @return integer[]
     */
    public function getSid()
    {
        return $this->get(self::SID);
    }

    /**
     * Returns 'sid' iterator
     *
     * @return \ArrayIterator
     */
    public function getSidIterator()
    {
        return new \ArrayIterator($this->get(self::SID));
    }

    /**
     * Returns element from 'sid' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getSidAt($offset)
    {
        return $this->get(self::SID, $offset);
    }

    /**
     * Returns count of 'sid' list
     *
     * @return int
     */
    public function getSidCount()
    {
        return $this->count(self::SID);
    }

    /**
     * Appends value to 'count' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendCount($value)
    {
        return $this->append(self::COUNT, $value);
    }

    /**
     * Clears 'count' list
     *
     * @return null
     */
    public function clearCount()
    {
        return $this->clear(self::COUNT);
    }

    /**
     * Returns 'count' list
     *
     * @return integer[]
     */
    public function getCount()
    {
        return $this->get(self::COUNT);
    }

    /**
     * Returns 'count' iterator
     *
     * @return \ArrayIterator
     */
    public function getCountIterator()
    {
        return new \ArrayIterator($this->get(self::COUNT));
    }

    /**
     * Returns element from 'count' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getCountAt($offset)
    {
        return $this->get(self::COUNT, $offset);
    }

    /**
     * Returns count of 'count' list
     *
     * @return int
     */
    public function getCountCount()
    {
        return $this->count(self::COUNT);
    }
}
}