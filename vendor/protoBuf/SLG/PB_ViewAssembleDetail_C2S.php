<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ViewAssembleDetail_C2S message
 */
class PB_ViewAssembleDetail_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const ASSEMBLE_ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASSEMBLE_ID => array(
            'name' => 'assemble_id',
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
        $this->values[self::ID] = null;
        $this->values[self::ASSEMBLE_ID] = null;
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
     * Sets value of 'assemble_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAssembleId($value)
    {
        return $this->set(self::ASSEMBLE_ID, $value);
    }

    /**
     * Returns value of 'assemble_id' property
     *
     * @return integer
     */
    public function getAssembleId()
    {
        $value = $this->get(self::ASSEMBLE_ID);
        return $value === null ? (integer)$value : $value;
    }
}
}