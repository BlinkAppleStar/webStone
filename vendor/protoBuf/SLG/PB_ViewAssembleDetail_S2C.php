<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ViewAssembleDetail_S2C message
 */
class PB_ViewAssembleDetail_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const LEAGUE_ID = 1;
    const ASSEMBLE_INFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LEAGUE_ID => array(
            'name' => 'league_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::LEAGUE_ID] = null;
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
     * Sets value of 'league_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLeagueId($value)
    {
        return $this->set(self::LEAGUE_ID, $value);
    }

    /**
     * Returns value of 'league_id' property
     *
     * @return integer
     */
    public function getLeagueId()
    {
        $value = $this->get(self::LEAGUE_ID);
        return $value === null ? (integer)$value : $value;
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