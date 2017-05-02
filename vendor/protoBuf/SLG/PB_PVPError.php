<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_PVPError message
 */
class PB_PVPError extends \ProtobufMessage
{
    /* Field index constants */
    const LID = 1;
    const ERROR = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LID => array(
            'name' => 'lid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERROR => array(
            'name' => 'error',
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
        $this->values[self::LID] = null;
        $this->values[self::ERROR] = null;
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
     * Sets value of 'error' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setError($value)
    {
        return $this->set(self::ERROR, $value);
    }

    /**
     * Returns value of 'error' property
     *
     * @return integer
     */
    public function getError()
    {
        $value = $this->get(self::ERROR);
        return $value === null ? (integer)$value : $value;
    }
}
}