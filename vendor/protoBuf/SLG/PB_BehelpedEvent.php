<?php
/**
 * Auto generated from Server.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_BehelpedEvent message
 */
class PB_BehelpedEvent extends \ProtobufMessage
{
    /* Field index constants */
    const HELP_TYPE = 1;
    const HELP_TARGET_ID = 2;
    const HELPER_NAME = 3;
    const HELPER_ID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HELP_TYPE => array(
            'name' => 'help_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HELP_TARGET_ID => array(
            'name' => 'help_target_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HELPER_NAME => array(
            'name' => 'helper_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::HELPER_ID => array(
            'name' => 'helper_id',
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
        $this->values[self::HELP_TARGET_ID] = null;
        $this->values[self::HELPER_NAME] = null;
        $this->values[self::HELPER_ID] = null;
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
     * Sets value of 'help_target_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHelpTargetId($value)
    {
        return $this->set(self::HELP_TARGET_ID, $value);
    }

    /**
     * Returns value of 'help_target_id' property
     *
     * @return integer
     */
    public function getHelpTargetId()
    {
        $value = $this->get(self::HELP_TARGET_ID);
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
     * Sets value of 'helper_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHelperId($value)
    {
        return $this->set(self::HELPER_ID, $value);
    }

    /**
     * Returns value of 'helper_id' property
     *
     * @return integer
     */
    public function getHelperId()
    {
        $value = $this->get(self::HELPER_ID);
        return $value === null ? (integer)$value : $value;
    }
}
}