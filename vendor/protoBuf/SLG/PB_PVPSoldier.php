<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_PVPSoldier message
 */
class PB_PVPSoldier extends \ProtobufMessage
{
    /* Field index constants */
    const GID = 1;
    const ID = 2;
    const LID = 3;
    const HP = 4;
    const STATE = 5;
    const LEVEL = 6;
    const ENEMY = 7;
    const TIME = 8;
    const ACTION = 9;
    const TOKEN = 10;
    const CINDEX = 100;
    const LOOKAT = 101;
    const MOVETO = 105;
    const POSITION = 106;
    const ATTACK = 301;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GID => array(
            'name' => 'gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LID => array(
            'name' => 'lid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HP => array(
            'name' => 'hp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEVEL => array(
            'default' => 1,
            'name' => 'level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENEMY => array(
            'name' => 'enemy',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::ACTION => array(
            'name' => 'action',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOKEN => array(
            'name' => 'token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CINDEX => array(
            'name' => 'cindex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOOKAT => array(
            'name' => 'lookat',
            'required' => false,
            'type' => '\PB_Vec3'
        ),
        self::MOVETO => array(
            'name' => 'moveto',
            'required' => false,
            'type' => '\PB_Vec3'
        ),
        self::POSITION => array(
            'name' => 'position',
            'required' => false,
            'type' => '\PB_Vec3'
        ),
        self::ATTACK => array(
            'name' => 'attack',
            'repeated' => true,
            'type' => '\PB_PVPAttack'
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
        $this->values[self::GID] = null;
        $this->values[self::ID] = null;
        $this->values[self::LID] = null;
        $this->values[self::HP] = null;
        $this->values[self::STATE] = null;
        $this->values[self::LEVEL] = self::$fields[self::LEVEL]['default'];
        $this->values[self::ENEMY] = null;
        $this->values[self::TIME] = null;
        $this->values[self::ACTION] = null;
        $this->values[self::TOKEN] = null;
        $this->values[self::CINDEX] = null;
        $this->values[self::LOOKAT] = null;
        $this->values[self::MOVETO] = null;
        $this->values[self::POSITION] = null;
        $this->values[self::ATTACK] = array();
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
     * Sets value of 'gid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGid($value)
    {
        return $this->set(self::GID, $value);
    }

    /**
     * Returns value of 'gid' property
     *
     * @return integer
     */
    public function getGid()
    {
        $value = $this->get(self::GID);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'lid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLid($value)
    {
        return $this->set(self::LID, $value);
    }

    /**
     * Returns value of 'lid' property
     *
     * @return integer
     */
    public function getLid()
    {
        $value = $this->get(self::LID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'hp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHp($value)
    {
        return $this->set(self::HP, $value);
    }

    /**
     * Returns value of 'hp' property
     *
     * @return integer
     */
    public function getHp()
    {
        $value = $this->get(self::HP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
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
     * Sets value of 'enemy' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEnemy($value)
    {
        return $this->set(self::ENEMY, $value);
    }

    /**
     * Returns value of 'enemy' property
     *
     * @return integer
     */
    public function getEnemy()
    {
        $value = $this->get(self::ENEMY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'time' property
     *
     * @param double $value Property value
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
     * @return double
     */
    public function getTime()
    {
        $value = $this->get(self::TIME);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'action' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAction($value)
    {
        return $this->set(self::ACTION, $value);
    }

    /**
     * Returns value of 'action' property
     *
     * @return integer
     */
    public function getAction()
    {
        $value = $this->get(self::ACTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'token' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setToken($value)
    {
        return $this->set(self::TOKEN, $value);
    }

    /**
     * Returns value of 'token' property
     *
     * @return integer
     */
    public function getToken()
    {
        $value = $this->get(self::TOKEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'cindex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCindex($value)
    {
        return $this->set(self::CINDEX, $value);
    }

    /**
     * Returns value of 'cindex' property
     *
     * @return integer
     */
    public function getCindex()
    {
        $value = $this->get(self::CINDEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'lookat' property
     *
     * @param \PB_Vec3 $value Property value
     *
     * @return null
     */
    public function setLookat(\PB_Vec3 $value=null)
    {
        return $this->set(self::LOOKAT, $value);
    }

    /**
     * Returns value of 'lookat' property
     *
     * @return \PB_Vec3
     */
    public function getLookat()
    {
        return $this->get(self::LOOKAT);
    }

    /**
     * Sets value of 'moveto' property
     *
     * @param \PB_Vec3 $value Property value
     *
     * @return null
     */
    public function setMoveto(\PB_Vec3 $value=null)
    {
        return $this->set(self::MOVETO, $value);
    }

    /**
     * Returns value of 'moveto' property
     *
     * @return \PB_Vec3
     */
    public function getMoveto()
    {
        return $this->get(self::MOVETO);
    }

    /**
     * Sets value of 'position' property
     *
     * @param \PB_Vec3 $value Property value
     *
     * @return null
     */
    public function setPosition(\PB_Vec3 $value=null)
    {
        return $this->set(self::POSITION, $value);
    }

    /**
     * Returns value of 'position' property
     *
     * @return \PB_Vec3
     */
    public function getPosition()
    {
        return $this->get(self::POSITION);
    }

    /**
     * Appends value to 'attack' list
     *
     * @param \PB_PVPAttack $value Value to append
     *
     * @return null
     */
    public function appendAttack(\PB_PVPAttack $value)
    {
        return $this->append(self::ATTACK, $value);
    }

    /**
     * Clears 'attack' list
     *
     * @return null
     */
    public function clearAttack()
    {
        return $this->clear(self::ATTACK);
    }

    /**
     * Returns 'attack' list
     *
     * @return \PB_PVPAttack[]
     */
    public function getAttack()
    {
        return $this->get(self::ATTACK);
    }

    /**
     * Returns 'attack' iterator
     *
     * @return \ArrayIterator
     */
    public function getAttackIterator()
    {
        return new \ArrayIterator($this->get(self::ATTACK));
    }

    /**
     * Returns element from 'attack' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_PVPAttack
     */
    public function getAttackAt($offset)
    {
        return $this->get(self::ATTACK, $offset);
    }

    /**
     * Returns count of 'attack' list
     *
     * @return int
     */
    public function getAttackCount()
    {
        return $this->count(self::ATTACK);
    }
}
}