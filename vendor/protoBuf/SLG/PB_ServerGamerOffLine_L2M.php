<?php
/**
 * Auto generated from Server.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ServerGamerOffLine_L2M message
 */
class PB_ServerGamerOffLine_L2M extends \ProtobufMessage
{
    /* Field index constants */
    const GAMER = 1;
    const CANCEL = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAMER => array(
            'name' => 'gamer',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CANCEL => array(
            'default' => false,
            'name' => 'cancel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::GAMER] = null;
        $this->values[self::CANCEL] = self::$fields[self::CANCEL]['default'];
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
     * Sets value of 'gamer' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGamer($value)
    {
        return $this->set(self::GAMER, $value);
    }

    /**
     * Returns value of 'gamer' property
     *
     * @return integer
     */
    public function getGamer()
    {
        $value = $this->get(self::GAMER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'cancel' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setCancel($value)
    {
        return $this->set(self::CANCEL, $value);
    }

    /**
     * Returns value of 'cancel' property
     *
     * @return boolean
     */
    public function getCancel()
    {
        $value = $this->get(self::CANCEL);
        return $value === null ? (boolean)$value : $value;
    }
}
}