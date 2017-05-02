<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_TimeEffectList message
 */
class PB_TimeEffectList extends \ProtobufMessage
{
    /* Field index constants */
    const KEY = 1;
    const TIME_EFFECT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::KEY => array(
            'name' => 'key',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIME_EFFECT => array(
            'name' => 'time_effect',
            'repeated' => true,
            'type' => '\PB_TimeEffect'
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
        $this->values[self::KEY] = null;
        $this->values[self::TIME_EFFECT] = array();
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
     * Sets value of 'key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKey($value)
    {
        return $this->set(self::KEY, $value);
    }

    /**
     * Returns value of 'key' property
     *
     * @return string
     */
    public function getKey()
    {
        $value = $this->get(self::KEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'time_effect' list
     *
     * @param \PB_TimeEffect $value Value to append
     *
     * @return null
     */
    public function appendTimeEffect(\PB_TimeEffect $value)
    {
        return $this->append(self::TIME_EFFECT, $value);
    }

    /**
     * Clears 'time_effect' list
     *
     * @return null
     */
    public function clearTimeEffect()
    {
        return $this->clear(self::TIME_EFFECT);
    }

    /**
     * Returns 'time_effect' list
     *
     * @return \PB_TimeEffect[]
     */
    public function getTimeEffect()
    {
        return $this->get(self::TIME_EFFECT);
    }

    /**
     * Returns 'time_effect' iterator
     *
     * @return \ArrayIterator
     */
    public function getTimeEffectIterator()
    {
        return new \ArrayIterator($this->get(self::TIME_EFFECT));
    }

    /**
     * Returns element from 'time_effect' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_TimeEffect
     */
    public function getTimeEffectAt($offset)
    {
        return $this->get(self::TIME_EFFECT, $offset);
    }

    /**
     * Returns count of 'time_effect' list
     *
     * @return int
     */
    public function getTimeEffectCount()
    {
        return $this->count(self::TIME_EFFECT);
    }
}
}