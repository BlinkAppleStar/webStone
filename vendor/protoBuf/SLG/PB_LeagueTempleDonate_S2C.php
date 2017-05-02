<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LeagueTempleDonate_S2C message
 */
class PB_LeagueTempleDonate_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const SELF = 1;
    const INFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SELF => array(
            'name' => 'self',
            'required' => false,
            'type' => '\PB_LeagueTempleMember'
        ),
        self::INFO => array(
            'name' => 'info',
            'required' => false,
            'type' => '\PB_LeagueTempleInfo'
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
        $this->values[self::SELF] = null;
        $this->values[self::INFO] = null;
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
     * Sets value of 'self' property
     *
     * @param \PB_LeagueTempleMember $value Property value
     *
     * @return null
     */
    public function setSelf(\PB_LeagueTempleMember $value=null)
    {
        return $this->set(self::SELF, $value);
    }

    /**
     * Returns value of 'self' property
     *
     * @return \PB_LeagueTempleMember
     */
    public function getSelf()
    {
        return $this->get(self::SELF);
    }

    /**
     * Sets value of 'info' property
     *
     * @param \PB_LeagueTempleInfo $value Property value
     *
     * @return null
     */
    public function setInfo(\PB_LeagueTempleInfo $value=null)
    {
        return $this->set(self::INFO, $value);
    }

    /**
     * Returns value of 'info' property
     *
     * @return \PB_LeagueTempleInfo
     */
    public function getInfo()
    {
        return $this->get(self::INFO);
    }
}
}