<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_SwitchAssemble_S2C message
 */
class PB_SwitchAssemble_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const HKEY = 1;
    const AUTO_START = 2;
    const GO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HKEY => array(
            'name' => 'hkey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AUTO_START => array(
            'name' => 'auto_start',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::GO => array(
            'name' => 'go',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::HKEY] = null;
        $this->values[self::AUTO_START] = null;
        $this->values[self::GO] = null;
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
     * Sets value of 'hkey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHkey($value)
    {
        return $this->set(self::HKEY, $value);
    }

    /**
     * Returns value of 'hkey' property
     *
     * @return string
     */
    public function getHkey()
    {
        $value = $this->get(self::HKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'auto_start' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setAutoStart($value)
    {
        return $this->set(self::AUTO_START, $value);
    }

    /**
     * Returns value of 'auto_start' property
     *
     * @return boolean
     */
    public function getAutoStart()
    {
        $value = $this->get(self::AUTO_START);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'go' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setGo($value)
    {
        return $this->set(self::GO, $value);
    }

    /**
     * Returns value of 'go' property
     *
     * @return boolean
     */
    public function getGo()
    {
        $value = $this->get(self::GO);
        return $value === null ? (boolean)$value : $value;
    }
}
}