<?php
/**
 * Auto generated from Effect.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ListTimeEffect_S2C message
 */
class PB_ListTimeEffect_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const TIME_EFFECT_LIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIME_EFFECT_LIST => array(
            'name' => 'time_effect_list',
            'repeated' => true,
            'type' => '\PB_TimeEffectList'
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
        $this->values[self::TIME_EFFECT_LIST] = array();
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
     * Appends value to 'time_effect_list' list
     *
     * @param \PB_TimeEffectList $value Value to append
     *
     * @return null
     */
    public function appendTimeEffectList(\PB_TimeEffectList $value)
    {
        return $this->append(self::TIME_EFFECT_LIST, $value);
    }

    /**
     * Clears 'time_effect_list' list
     *
     * @return null
     */
    public function clearTimeEffectList()
    {
        return $this->clear(self::TIME_EFFECT_LIST);
    }

    /**
     * Returns 'time_effect_list' list
     *
     * @return \PB_TimeEffectList[]
     */
    public function getTimeEffectList()
    {
        return $this->get(self::TIME_EFFECT_LIST);
    }

    /**
     * Returns 'time_effect_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getTimeEffectListIterator()
    {
        return new \ArrayIterator($this->get(self::TIME_EFFECT_LIST));
    }

    /**
     * Returns element from 'time_effect_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_TimeEffectList
     */
    public function getTimeEffectListAt($offset)
    {
        return $this->get(self::TIME_EFFECT_LIST, $offset);
    }

    /**
     * Returns count of 'time_effect_list' list
     *
     * @return int
     */
    public function getTimeEffectListCount()
    {
        return $this->count(self::TIME_EFFECT_LIST);
    }
}
}