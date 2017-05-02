<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_TransferLeague_C2S message
 */
class PB_TransferLeague_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const LEAGUE_ID = 2;
    const RECIPIENT_ID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEAGUE_ID => array(
            'name' => 'league_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECIPIENT_ID => array(
            'name' => 'recipient_id',
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
        $this->values[self::LEAGUE_ID] = null;
        $this->values[self::RECIPIENT_ID] = null;
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
     * Sets value of 'recipient_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecipientId($value)
    {
        return $this->set(self::RECIPIENT_ID, $value);
    }

    /**
     * Returns value of 'recipient_id' property
     *
     * @return integer
     */
    public function getRecipientId()
    {
        $value = $this->get(self::RECIPIENT_ID);
        return $value === null ? (integer)$value : $value;
    }
}
}