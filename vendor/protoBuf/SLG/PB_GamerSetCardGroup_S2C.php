<?php
/**
 * Auto generated from Card.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerSetCardGroup_S2C message
 */
class PB_GamerSetCardGroup_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const GROUP = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GROUP => array(
            'name' => 'group',
            'required' => false,
            'type' => '\PB_CardGroup'
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
        $this->values[self::GROUP] = null;
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
     * Sets value of 'group' property
     *
     * @param \PB_CardGroup $value Property value
     *
     * @return null
     */
    public function setGroup(\PB_CardGroup $value=null)
    {
        return $this->set(self::GROUP, $value);
    }

    /**
     * Returns value of 'group' property
     *
     * @return \PB_CardGroup
     */
    public function getGroup()
    {
        return $this->get(self::GROUP);
    }
}
}