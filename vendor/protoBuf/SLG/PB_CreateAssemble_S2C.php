<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_CreateAssemble_S2C message
 */
class PB_CreateAssemble_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const ASSEMBLE_INFO = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ASSEMBLE_INFO => array(
            'name' => 'assemble_info',
            'required' => false,
            'type' => '\PB_AssembleInfo'
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
        $this->values[self::ASSEMBLE_INFO] = null;
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
     * Sets value of 'assemble_info' property
     *
     * @param \PB_AssembleInfo $value Property value
     *
     * @return null
     */
    public function setAssembleInfo(\PB_AssembleInfo $value=null)
    {
        return $this->set(self::ASSEMBLE_INFO, $value);
    }

    /**
     * Returns value of 'assemble_info' property
     *
     * @return \PB_AssembleInfo
     */
    public function getAssembleInfo()
    {
        return $this->get(self::ASSEMBLE_INFO);
    }
}
}