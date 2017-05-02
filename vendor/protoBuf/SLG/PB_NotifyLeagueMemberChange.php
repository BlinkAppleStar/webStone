<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_NotifyLeagueMemberChange message
 */
class PB_NotifyLeagueMemberChange extends \ProtobufMessage
{
    /* Field index constants */
    const CHANGE_TYPE = 1;
    const GAMER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CHANGE_TYPE => array(
            'name' => 'change_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMER => array(
            'name' => 'gamer',
            'required' => false,
            'type' => '\PB_Gamer'
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
        $this->values[self::CHANGE_TYPE] = null;
        $this->values[self::GAMER] = null;
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
     * Sets value of 'change_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChangeType($value)
    {
        return $this->set(self::CHANGE_TYPE, $value);
    }

    /**
     * Returns value of 'change_type' property
     *
     * @return integer
     */
    public function getChangeType()
    {
        $value = $this->get(self::CHANGE_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'gamer' property
     *
     * @param \PB_Gamer $value Property value
     *
     * @return null
     */
    public function setGamer(\PB_Gamer $value=null)
    {
        return $this->set(self::GAMER, $value);
    }

    /**
     * Returns value of 'gamer' property
     *
     * @return \PB_Gamer
     */
    public function getGamer()
    {
        return $this->get(self::GAMER);
    }
}
}