<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_CardGroup message
 */
class PB_CardGroup extends \ProtobufMessage
{
    /* Field index constants */
    const LID = 1;
    const GUARD = 2;
    const NAME = 3;
    const DESC = 4;
    const CARD = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LID => array(
            'name' => 'lid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUARD => array(
            'name' => 'guard',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DESC => array(
            'name' => 'desc',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CARD => array(
            'name' => 'card',
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
        $this->values[self::LID] = null;
        $this->values[self::GUARD] = null;
        $this->values[self::NAME] = null;
        $this->values[self::DESC] = null;
        $this->values[self::CARD] = array();
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
     * Sets value of 'lid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLid($value)
    {
        return $this->set(self::LID, $value);
    }

    /**
     * Returns value of 'lid' property
     *
     * @return integer
     */
    public function getLid()
    {
        $value = $this->get(self::LID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'guard' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGuard($value)
    {
        return $this->set(self::GUARD, $value);
    }

    /**
     * Returns value of 'guard' property
     *
     * @return integer
     */
    public function getGuard()
    {
        $value = $this->get(self::GUARD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'desc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDesc($value)
    {
        return $this->set(self::DESC, $value);
    }

    /**
     * Returns value of 'desc' property
     *
     * @return string
     */
    public function getDesc()
    {
        $value = $this->get(self::DESC);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'card' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendCard($value)
    {
        return $this->append(self::CARD, $value);
    }

    /**
     * Clears 'card' list
     *
     * @return null
     */
    public function clearCard()
    {
        return $this->clear(self::CARD);
    }

    /**
     * Returns 'card' list
     *
     * @return integer[]
     */
    public function getCard()
    {
        return $this->get(self::CARD);
    }

    /**
     * Returns 'card' iterator
     *
     * @return \ArrayIterator
     */
    public function getCardIterator()
    {
        return new \ArrayIterator($this->get(self::CARD));
    }

    /**
     * Returns element from 'card' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getCardAt($offset)
    {
        return $this->get(self::CARD, $offset);
    }

    /**
     * Returns count of 'card' list
     *
     * @return int
     */
    public function getCardCount()
    {
        return $this->count(self::CARD);
    }
}
}