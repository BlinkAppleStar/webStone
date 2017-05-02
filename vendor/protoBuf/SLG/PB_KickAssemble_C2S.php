<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_KickAssemble_C2S message
 */
class PB_KickAssemble_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const HKEY = 2;
    const KICK_GAMER_ID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HKEY => array(
            'name' => 'hkey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::KICK_GAMER_ID => array(
            'name' => 'kick_gamer_id',
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
        $this->values[self::ID] = null;
        $this->values[self::HKEY] = null;
        $this->values[self::KICK_GAMER_ID] = null;
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
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'hkey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHkey($value)
    {
        return $this->set(self::HKEY, $value);
    }

    /**
     * Returns value of 'hkey' property
     *
     * @return string
     */
    public function getHkey()
    {
        $value = $this->get(self::HKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'kick_gamer_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setKickGamerId($value)
    {
        return $this->set(self::KICK_GAMER_ID, $value);
    }

    /**
     * Returns value of 'kick_gamer_id' property
     *
     * @return integer
     */
    public function getKickGamerId()
    {
        $value = $this->get(self::KICK_GAMER_ID);
        return $value === null ? (integer)$value : $value;
    }
}
}