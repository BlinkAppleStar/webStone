<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LeagueNotifyCommon message
 */
class PB_LeagueNotifyCommon extends \ProtobufMessage
{
    /* Field index constants */
    const LEAGUE_NAME = 1;
    const GAMER_NAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LEAGUE_NAME => array(
            'name' => 'league_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GAMER_NAME => array(
            'name' => 'gamer_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::LEAGUE_NAME] = null;
        $this->values[self::GAMER_NAME] = null;
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
     * Sets value of 'league_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLeagueName($value)
    {
        return $this->set(self::LEAGUE_NAME, $value);
    }

    /**
     * Returns value of 'league_name' property
     *
     * @return string
     */
    public function getLeagueName()
    {
        $value = $this->get(self::LEAGUE_NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'gamer_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGamerName($value)
    {
        return $this->set(self::GAMER_NAME, $value);
    }

    /**
     * Returns value of 'gamer_name' property
     *
     * @return string
     */
    public function getGamerName()
    {
        $value = $this->get(self::GAMER_NAME);
        return $value === null ? (string)$value : $value;
    }
}
}