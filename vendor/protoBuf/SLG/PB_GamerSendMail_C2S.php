<?php
/**
 * Auto generated from Mail.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerSendMail_C2S message
 */
class PB_GamerSendMail_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const SEND_SCOPE = 2;
    const RECV_ID = 3;
    const RECV_NAME = 4;
    const LEAGUE_ID = 5;
    const PACK = 6;
    const TITLE = 7;
    const CONTENT = 8;
    const TEMPLATE_ID = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SEND_SCOPE => array(
            'name' => 'send_scope',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECV_ID => array(
            'name' => 'recv_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RECV_NAME => array(
            'name' => 'recv_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LEAGUE_ID => array(
            'name' => 'league_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PACK => array(
            'name' => 'pack',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TEMPLATE_ID => array(
            'name' => 'template_id',
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
        $this->values[self::SEND_SCOPE] = null;
        $this->values[self::RECV_ID] = null;
        $this->values[self::RECV_NAME] = null;
        $this->values[self::LEAGUE_ID] = null;
        $this->values[self::PACK] = null;
        $this->values[self::TITLE] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::TEMPLATE_ID] = null;
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
     * Sets value of 'send_scope' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSendScope($value)
    {
        return $this->set(self::SEND_SCOPE, $value);
    }

    /**
     * Returns value of 'send_scope' property
     *
     * @return integer
     */
    public function getSendScope()
    {
        $value = $this->get(self::SEND_SCOPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'recv_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecvId($value)
    {
        return $this->set(self::RECV_ID, $value);
    }

    /**
     * Returns value of 'recv_id' property
     *
     * @return integer
     */
    public function getRecvId()
    {
        $value = $this->get(self::RECV_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'recv_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRecvName($value)
    {
        return $this->set(self::RECV_NAME, $value);
    }

    /**
     * Returns value of 'recv_name' property
     *
     * @return string
     */
    public function getRecvName()
    {
        $value = $this->get(self::RECV_NAME);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'pack' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPack($value)
    {
        return $this->set(self::PACK, $value);
    }

    /**
     * Returns value of 'pack' property
     *
     * @return integer
     */
    public function getPack()
    {
        $value = $this->get(self::PACK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle()
    {
        $value = $this->get(self::TITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return string
     */
    public function getContent()
    {
        $value = $this->get(self::CONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'template_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTemplateId($value)
    {
        return $this->set(self::TEMPLATE_ID, $value);
    }

    /**
     * Returns value of 'template_id' property
     *
     * @return integer
     */
    public function getTemplateId()
    {
        $value = $this->get(self::TEMPLATE_ID);
        return $value === null ? (integer)$value : $value;
    }
}
}