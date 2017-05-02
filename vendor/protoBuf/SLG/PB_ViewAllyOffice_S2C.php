<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ViewAllyOffice_S2C message
 */
class PB_ViewAllyOffice_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const GAMER_ID = 1;
    const MAX_SOLDIER_NUM = 2;
    const MAX_GAMER_NUM = 3;
    const SUPPORT_COMBATS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAMER_ID => array(
            'name' => 'gamer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAX_SOLDIER_NUM => array(
            'name' => 'max_soldier_num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAX_GAMER_NUM => array(
            'name' => 'max_gamer_num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SUPPORT_COMBATS => array(
            'name' => 'support_combats',
            'repeated' => true,
            'type' => '\PB_Combat'
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
        $this->values[self::MAX_SOLDIER_NUM] = null;
        $this->values[self::MAX_GAMER_NUM] = null;
        $this->values[self::SUPPORT_COMBATS] = array();
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
     * Sets value of 'max_soldier_num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxSoldierNum($value)
    {
        return $this->set(self::MAX_SOLDIER_NUM, $value);
    }

    /**
     * Returns value of 'max_soldier_num' property
     *
     * @return integer
     */
    public function getMaxSoldierNum()
    {
        $value = $this->get(self::MAX_SOLDIER_NUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'max_gamer_num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxGamerNum($value)
    {
        return $this->set(self::MAX_GAMER_NUM, $value);
    }

    /**
     * Returns value of 'max_gamer_num' property
     *
     * @return integer
     */
    public function getMaxGamerNum()
    {
        $value = $this->get(self::MAX_GAMER_NUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'support_combats' list
     *
     * @param \PB_Combat $value Value to append
     *
     * @return null
     */
    public function appendSupportCombats(\PB_Combat $value)
    {
        return $this->append(self::SUPPORT_COMBATS, $value);
    }

    /**
     * Clears 'support_combats' list
     *
     * @return null
     */
    public function clearSupportCombats()
    {
        return $this->clear(self::SUPPORT_COMBATS);
    }

    /**
     * Returns 'support_combats' list
     *
     * @return \PB_Combat[]
     */
    public function getSupportCombats()
    {
        return $this->get(self::SUPPORT_COMBATS);
    }

    /**
     * Returns 'support_combats' iterator
     *
     * @return \ArrayIterator
     */
    public function getSupportCombatsIterator()
    {
        return new \ArrayIterator($this->get(self::SUPPORT_COMBATS));
    }

    /**
     * Returns element from 'support_combats' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Combat
     */
    public function getSupportCombatsAt($offset)
    {
        return $this->get(self::SUPPORT_COMBATS, $offset);
    }

    /**
     * Returns count of 'support_combats' list
     *
     * @return int
     */
    public function getSupportCombatsCount()
    {
        return $this->count(self::SUPPORT_COMBATS);
    }
}
}