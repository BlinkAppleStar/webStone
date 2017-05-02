<?php
/**
 * Auto generated from Server.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ServerNotifyDeleteHelp message
 */
class PB_ServerNotifyDeleteHelp extends \ProtobufMessage
{
    /* Field index constants */
    const LEAGUE_ID = 1;
    const INFO_ID = 2;

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
}
}