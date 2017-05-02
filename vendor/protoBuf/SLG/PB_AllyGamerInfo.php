<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_AllyGamerInfo message
 */
class PB_AllyGamerInfo extends \ProtobufMessage
{
    /* Field index constants */
    const GAMER_ID = 1;
    const HEAD = 2;
    const GAMER_ICON = 3;
    const NAME = 4;
    const TOTAL = 5;
    const SOLDIER = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAMER_ID => array(
            'name' => 'gamer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HEAD => array(
            'name' => 'head',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMER_ICON => array(
            'name' => 'gamer_icon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOTAL => array(
            'name' => 'total',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOLDIER => array(
            'name' => 'soldier',
            'repeated' => true,
            'type' => '\PB_AllySoldierInfo'
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
        $this->values[self::GAMER_ID] = null;
        $this->values[self::HEAD] = null;
        $this->values[self::GAMER_ICON] = null;
        $this->values[self::NAME] = null;
        $this->values[self::TOTAL] = null;
        $this->values[self::SOLDIER] = array();
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
     * Sets value of 'gamer_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGamerId($value)
    {
        return $this->set(self::GAMER_ID, $value);
    }

    /**
     * Returns value of 'gamer_id' property
     *
     * @return integer
     */
    public function getGamerId()
    {
        $value = $this->get(self::GAMER_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'head' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHead($value)
    {
        return $this->set(self::HEAD, $value);
    }

    /**
     * Returns value of 'head' property
     *
     * @return integer
     */
    public function getHead()
    {
        $value = $this->get(self::HEAD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'gamer_icon' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGamerIcon($value)
    {
        return $this->set(self::GAMER_ICON, $value);
    }

    /**
     * Returns value of 'gamer_icon' property
     *
     * @return string
     */
    public function getGamerIcon()
    {
        $value = $this->get(self::GAMER_ICON);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'total' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotal($value)
    {
        return $this->set(self::TOTAL, $value);
    }

    /**
     * Returns value of 'total' property
     *
     * @return integer
     */
    public function getTotal()
    {
        $value = $this->get(self::TOTAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'soldier' list
     *
     * @param \PB_AllySoldierInfo $value Value to append
     *
     * @return null
     */
    public function appendSoldier(\PB_AllySoldierInfo $value)
    {
        return $this->append(self::SOLDIER, $value);
    }

    /**
     * Clears 'soldier' list
     *
     * @return null
     */
    public function clearSoldier()
    {
        return $this->clear(self::SOLDIER);
    }

    /**
     * Returns 'soldier' list
     *
     * @return \PB_AllySoldierInfo[]
     */
    public function getSoldier()
    {
        return $this->get(self::SOLDIER);
    }

    /**
     * Returns 'soldier' iterator
     *
     * @return \ArrayIterator
     */
    public function getSoldierIterator()
    {
        return new \ArrayIterator($this->get(self::SOLDIER));
    }

    /**
     * Returns element from 'soldier' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_AllySoldierInfo
     */
    public function getSoldierAt($offset)
    {
        return $this->get(self::SOLDIER, $offset);
    }

    /**
     * Returns count of 'soldier' list
     *
     * @return int
     */
    public function getSoldierCount()
    {
        return $this->count(self::SOLDIER);
    }
}
}