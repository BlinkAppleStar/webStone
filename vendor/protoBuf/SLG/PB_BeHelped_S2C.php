<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_BeHelped_S2C message
 */
class PB_BeHelped_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const HELP_TYPE = 1;
    const HELP_TARGET = 2;
    const HELPER_NAME = 3;
    const END_TIME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HELP_TYPE => array(
            'name' => 'help_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HELP_TARGET => array(
            'name' => 'help_target',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HELPER_NAME => array(
            'name' => 'helper_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::END_TIME => array(
            'name' => 'end_time',
            'required' => false,
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
        $this->values[self::HELP_TYPE] = null;
        $this->values[self::HELP_TARGET] = null;
        $this->values[self::HELPER_NAME] = null;
        $this->values[self::END_TIME] = null;
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
     * Sets value of 'help_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHelpType($value)
    {
        return $this->set(self::HELP_TYPE, $value);
    }

    /**
     * Returns value of 'help_type' property
     *
     * @return integer
     */
    public function getHelpType()
    {
        $value = $this->get(self::HELP_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'help_target' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHelpTarget($value)
    {
        return $this->set(self::HELP_TARGET, $value);
    }

    /**
     * Returns value of 'help_target' property
     *
     * @return integer
     */
    public function getHelpTarget()
    {
        $value = $this->get(self::HELP_TARGET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'helper_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHelperName($value)
    {
        return $this->set(self::HELPER_NAME, $value);
    }

    /**
     * Returns value of 'helper_name' property
     *
     * @return string
     */
    public function getHelperName()
    {
        $value = $this->get(self::HELPER_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'end_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEndTime($value)
    {
        return $this->set(self::END_TIME, $value);
    }

    /**
     * Returns value of 'end_time' property
     *
     * @return integer
     */
    public function getEndTime()
    {
        $value = $this->get(self::END_TIME);
        return $value === null ? (integer)$value : $value;
    }
}
}