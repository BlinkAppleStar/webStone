<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_UpdateLeague_S2C message
 */
class PB_UpdateLeague_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const LEAGUE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LEAGUE => array(
            'name' => 'league',
            'required' => false,
            'type' => '\PB_League'
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
        $this->values[self::LEAGUE] = null;
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
     * Sets value of 'league' property
     *
     * @param \PB_League $value Property value
     *
     * @return null
     */
    public function setLeague(\PB_League $value=null)
    {
        return $this->set(self::LEAGUE, $value);
    }

    /**
     * Returns value of 'league' property
     *
     * @return \PB_League
     */
    public function getLeague()
    {
        return $this->get(self::LEAGUE);
    }
}
}