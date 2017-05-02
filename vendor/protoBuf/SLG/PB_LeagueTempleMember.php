<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LeagueTempleMember message
 */
class PB_LeagueTempleMember extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const LEAGUE_ID = 2;
    const WORSHIP_NUM = 3;
    const REMAIN_NUM = 4;
    const LAST_RECOVER_TIMESTAMP = 5;
    const HONOR = 6;

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
        self::WORSHIP_NUM => array(
            'name' => 'worship_num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REMAIN_NUM => array(
            'name' => 'remain_num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LAST_RECOVER_TIMESTAMP => array(
            'name' => 'last_recover_timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HONOR => array(
            'name' => 'honor',
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
        $this->values[self::WORSHIP_NUM] = null;
        $this->values[self::REMAIN_NUM] = null;
        $this->values[self::LAST_RECOVER_TIMESTAMP] = null;
        $this->values[self::HONOR] = null;
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
     * Sets value of 'worship_num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWorshipNum($value)
    {
        return $this->set(self::WORSHIP_NUM, $value);
    }

    /**
     * Returns value of 'worship_num' property
     *
     * @return integer
     */
    public function getWorshipNum()
    {
        $value = $this->get(self::WORSHIP_NUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'remain_num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRemainNum($value)
    {
        return $this->set(self::REMAIN_NUM, $value);
    }

    /**
     * Returns value of 'remain_num' property
     *
     * @return integer
     */
    public function getRemainNum()
    {
        $value = $this->get(self::REMAIN_NUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'last_recover_timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLastRecoverTimestamp($value)
    {
        return $this->set(self::LAST_RECOVER_TIMESTAMP, $value);
    }

    /**
     * Returns value of 'last_recover_timestamp' property
     *
     * @return integer
     */
    public function getLastRecoverTimestamp()
    {
        $value = $this->get(self::LAST_RECOVER_TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'honor' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHonor($value)
    {
        return $this->set(self::HONOR, $value);
    }

    /**
     * Returns value of 'honor' property
     *
     * @return integer
     */
    public function getHonor()
    {
        $value = $this->get(self::HONOR);
        return $value === null ? (integer)$value : $value;
    }
}
}