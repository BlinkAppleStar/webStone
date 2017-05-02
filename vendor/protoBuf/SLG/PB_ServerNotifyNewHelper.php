<?php
/**
 * Auto generated from Server.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ServerNotifyNewHelper message
 */
class PB_ServerNotifyNewHelper extends \ProtobufMessage
{
    /* Field index constants */
    const LEAGUE_ID = 1;
    const INFO_ID = 2;
    const HELPER = 3;
    const BEHELPED_ID = 4;
    const HELP_TYPE = 5;
    const HELP_TARGET_ID = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LEAGUE_ID => array(
            'name' => 'league_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INFO_ID => array(
            'name' => 'info_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HELPER => array(
            'name' => 'helper',
            'required' => false,
            'type' => '\PB_LeagueHelper'
        ),
        self::BEHELPED_ID => array(
            'name' => 'behelped_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        $this->values[self::INFO_ID] = null;
        $this->values[self::HELPER] = null;
        $this->values[self::BEHELPED_ID] = null;
        $this->values[self::HELP_TYPE] = null;
        $this->values[self::HELP_TARGET_ID] = null;
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
     * Sets value of 'info_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInfoId($value)
    {
        return $this->set(self::INFO_ID, $value);
    }

    /**
     * Returns value of 'info_id' property
     *
     * @return integer
     */
    public function getInfoId()
    {
        $value = $this->get(self::INFO_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'helper' property
     *
     * @param \PB_LeagueHelper $value Property value
     *
     * @return null
     */
    public function setHelper(\PB_LeagueHelper $value=null)
    {
        return $this->set(self::HELPER, $value);
    }

    /**
     * Returns value of 'helper' property
     *
     * @return \PB_LeagueHelper
     */
    public function getHelper()
    {
        return $this->get(self::HELPER);
    }

    /**
     * Sets value of 'behelped_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBehelpedId($value)
    {
        return $this->set(self::BEHELPED_ID, $value);
    }

    /**
     * Returns value of 'behelped_id' property
     *
     * @return integer
     */
    public function getBehelpedId()
    {
        $value = $this->get(self::BEHELPED_ID);
        return $value === null ? (integer)$value : $value;
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
}
}