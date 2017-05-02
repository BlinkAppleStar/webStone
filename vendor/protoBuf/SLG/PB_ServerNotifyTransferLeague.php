<?php
/**
 * Auto generated from Server.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ServerNotifyTransferLeague message
 */
class PB_ServerNotifyTransferLeague extends \ProtobufMessage
{
    /* Field index constants */
    const LEAGUE_ID = 1;
    const TRANSFER_ID = 2;
    const RECIPIENT_ID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LEAGUE_ID => array(
            'name' => 'league_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TRANSFER_ID => array(
            'name' => 'transfer_id',
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
        $this->values[self::LEAGUE_ID] = null;
        $this->values[self::TRANSFER_ID] = null;
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
     * Sets value of 'transfer_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTransferId($value)
    {
        return $this->set(self::TRANSFER_ID, $value);
    }

    /**
     * Returns value of 'transfer_id' property
     *
     * @return integer
     */
    public function getTransferId()
    {
        $value = $this->get(self::TRANSFER_ID);
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