<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LeagueTalk message
 */
class PB_LeagueTalk extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const TIME = 2;
    const NAME = 3;
    const MSG = 4;
    const LEAGUE_ID = 5;
    const ICON = 6;
    const LEVEL = 7;
    const VIP = 8;
    const TEMPLATE_ID = 9;
    const PARAMS = 10;
    const MAIL = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NAME => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MSG => array(
            'name' => 'msg',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LEAGUE_ID => array(
            'name' => 'league_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ICON => array(
            'name' => 'icon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VIP => array(
            'name' => 'vip',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TEMPLATE_ID => array(
            'name' => 'template_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PARAMS => array(
            'name' => 'params',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MAIL => array(
            'name' => 'mail',
            'required' => false,
            'type' => '\PB_Mail'
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
        $this->values[self::TIME] = null;
        $this->values[self::NAME] = null;
        $this->values[self::MSG] = null;
        $this->values[self::LEAGUE_ID] = null;
        $this->values[self::ICON] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::VIP] = null;
        $this->values[self::TEMPLATE_ID] = null;
        $this->values[self::PARAMS] = array();
        $this->values[self::MAIL] = null;
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
     * Sets value of 'time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTime($value)
    {
        return $this->set(self::TIME, $value);
    }

    /**
     * Returns value of 'time' property
     *
     * @return integer
     */
    public function getTime()
    {
        $value = $this->get(self::TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'msg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsg($value)
    {
        return $this->set(self::MSG, $value);
    }

    /**
     * Returns value of 'msg' property
     *
     * @return string
     */
    public function getMsg()
    {
        $value = $this->get(self::MSG);
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
     * Sets value of 'icon' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIcon($value)
    {
        return $this->set(self::ICON, $value);
    }

    /**
     * Returns value of 'icon' property
     *
     * @return integer
     */
    public function getIcon()
    {
        $value = $this->get(self::ICON);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return integer
     */
    public function getLevel()
    {
        $value = $this->get(self::LEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'vip' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVip($value)
    {
        return $this->set(self::VIP, $value);
    }

    /**
     * Returns value of 'vip' property
     *
     * @return integer
     */
    public function getVip()
    {
        $value = $this->get(self::VIP);
        return $value === null ? (integer)$value : $value;
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

    /**
     * Appends value to 'params' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendParams($value)
    {
        return $this->append(self::PARAMS, $value);
    }

    /**
     * Clears 'params' list
     *
     * @return null
     */
    public function clearParams()
    {
        return $this->clear(self::PARAMS);
    }

    /**
     * Returns 'params' list
     *
     * @return string[]
     */
    public function getParams()
    {
        return $this->get(self::PARAMS);
    }

    /**
     * Returns 'params' iterator
     *
     * @return \ArrayIterator
     */
    public function getParamsIterator()
    {
        return new \ArrayIterator($this->get(self::PARAMS));
    }

    /**
     * Returns element from 'params' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getParamsAt($offset)
    {
        return $this->get(self::PARAMS, $offset);
    }

    /**
     * Returns count of 'params' list
     *
     * @return int
     */
    public function getParamsCount()
    {
        return $this->count(self::PARAMS);
    }

    /**
     * Sets value of 'mail' property
     *
     * @param \PB_Mail $value Property value
     *
     * @return null
     */
    public function setMail(\PB_Mail $value=null)
    {
        return $this->set(self::MAIL, $value);
    }

    /**
     * Returns value of 'mail' property
     *
     * @return \PB_Mail
     */
    public function getMail()
    {
        return $this->get(self::MAIL);
    }
}
}