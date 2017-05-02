<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ViewLeagueWarDetail_S2C message
 */
class PB_ViewLeagueWarDetail_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const COMBAT_TYPE = 1;
    const COMBAT_INFO = 2;
    const ASSEMBLE_INFO = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COMBAT_TYPE => array(
            'name' => 'combat_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COMBAT_INFO => array(
            'name' => 'combat_info',
            'required' => false,
            'type' => '\PB_Combat'
        ),
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
        $this->values[self::COMBAT_TYPE] = null;
        $this->values[self::COMBAT_INFO] = null;
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
     * Sets value of 'combat_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCombatType($value)
    {
        return $this->set(self::COMBAT_TYPE, $value);
    }

    /**
     * Returns value of 'combat_type' property
     *
     * @return integer
     */
    public function getCombatType()
    {
        $value = $this->get(self::COMBAT_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'combat_info' property
     *
     * @param \PB_Combat $value Property value
     *
     * @return null
     */
    public function setCombatInfo(\PB_Combat $value=null)
    {
        return $this->set(self::COMBAT_INFO, $value);
    }

    /**
     * Returns value of 'combat_info' property
     *
     * @return \PB_Combat
     */
    public function getCombatInfo()
    {
        return $this->get(self::COMBAT_INFO);
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