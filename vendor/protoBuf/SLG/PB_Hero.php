<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_Hero message
 */
class PB_Hero extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const GRADE = 2;
    const HP = 3;
    const ACTIVE = 4;
    const JOB = 5;
    const RELIVE_TIME = 7;
    const KILL_NUM = 8;
    const COMBAT_NUM = 9;
    const EXP = 10;
    const SKILLS = 11;
    const RELIVE_HP_PERCENT = 12;
    const HP_PERCENT = 13;
    const NUM = 14;
    const RELIVE_TOTAL_TIME = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GRADE => array(
            'name' => 'grade',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HP => array(
            'name' => 'hp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACTIVE => array(
            'name' => 'active',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::JOB => array(
            'name' => 'job',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RELIVE_TIME => array(
            'name' => 'relive_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KILL_NUM => array(
            'name' => 'kill_num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COMBAT_NUM => array(
            'name' => 'combat_num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXP => array(
            'name' => 'exp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SKILLS => array(
            'name' => 'skills',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RELIVE_HP_PERCENT => array(
            'name' => 'relive_hp_percent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::HP_PERCENT => array(
            'name' => 'hp_percent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::NUM => array(
            'name' => 'num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RELIVE_TOTAL_TIME => array(
            'name' => 'relive_total_time',
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
        $this->values[self::GRADE] = null;
        $this->values[self::HP] = null;
        $this->values[self::ACTIVE] = null;
        $this->values[self::JOB] = null;
        $this->values[self::RELIVE_TIME] = null;
        $this->values[self::KILL_NUM] = null;
        $this->values[self::COMBAT_NUM] = null;
        $this->values[self::EXP] = null;
        $this->values[self::SKILLS] = array();
        $this->values[self::RELIVE_HP_PERCENT] = null;
        $this->values[self::HP_PERCENT] = null;
        $this->values[self::NUM] = null;
        $this->values[self::RELIVE_TOTAL_TIME] = null;
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
     * Sets value of 'grade' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGrade($value)
    {
        return $this->set(self::GRADE, $value);
    }

    /**
     * Returns value of 'grade' property
     *
     * @return integer
     */
    public function getGrade()
    {
        $value = $this->get(self::GRADE);
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
     * Sets value of 'active' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActive($value)
    {
        return $this->set(self::ACTIVE, $value);
    }

    /**
     * Returns value of 'active' property
     *
     * @return integer
     */
    public function getActive()
    {
        $value = $this->get(self::ACTIVE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'job' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setJob($value)
    {
        return $this->set(self::JOB, $value);
    }

    /**
     * Returns value of 'job' property
     *
     * @return integer
     */
    public function getJob()
    {
        $value = $this->get(self::JOB);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'relive_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReliveTime($value)
    {
        return $this->set(self::RELIVE_TIME, $value);
    }

    /**
     * Returns value of 'relive_time' property
     *
     * @return integer
     */
    public function getReliveTime()
    {
        $value = $this->get(self::RELIVE_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'kill_num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setKillNum($value)
    {
        return $this->set(self::KILL_NUM, $value);
    }

    /**
     * Returns value of 'kill_num' property
     *
     * @return integer
     */
    public function getKillNum()
    {
        $value = $this->get(self::KILL_NUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'combat_num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCombatNum($value)
    {
        return $this->set(self::COMBAT_NUM, $value);
    }

    /**
     * Returns value of 'combat_num' property
     *
     * @return integer
     */
    public function getCombatNum()
    {
        $value = $this->get(self::COMBAT_NUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'exp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExp($value)
    {
        return $this->set(self::EXP, $value);
    }

    /**
     * Returns value of 'exp' property
     *
     * @return integer
     */
    public function getExp()
    {
        $value = $this->get(self::EXP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'skills' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendSkills($value)
    {
        return $this->append(self::SKILLS, $value);
    }

    /**
     * Clears 'skills' list
     *
     * @return null
     */
    public function clearSkills()
    {
        return $this->clear(self::SKILLS);
    }

    /**
     * Returns 'skills' list
     *
     * @return integer[]
     */
    public function getSkills()
    {
        return $this->get(self::SKILLS);
    }

    /**
     * Returns 'skills' iterator
     *
     * @return \ArrayIterator
     */
    public function getSkillsIterator()
    {
        return new \ArrayIterator($this->get(self::SKILLS));
    }

    /**
     * Returns element from 'skills' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getSkillsAt($offset)
    {
        return $this->get(self::SKILLS, $offset);
    }

    /**
     * Returns count of 'skills' list
     *
     * @return int
     */
    public function getSkillsCount()
    {
        return $this->count(self::SKILLS);
    }

    /**
     * Sets value of 'relive_hp_percent' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setReliveHpPercent($value)
    {
        return $this->set(self::RELIVE_HP_PERCENT, $value);
    }

    /**
     * Returns value of 'relive_hp_percent' property
     *
     * @return double
     */
    public function getReliveHpPercent()
    {
        $value = $this->get(self::RELIVE_HP_PERCENT);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'hp_percent' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setHpPercent($value)
    {
        return $this->set(self::HP_PERCENT, $value);
    }

    /**
     * Returns value of 'hp_percent' property
     *
     * @return double
     */
    public function getHpPercent()
    {
        $value = $this->get(self::HP_PERCENT);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNum($value)
    {
        return $this->set(self::NUM, $value);
    }

    /**
     * Returns value of 'num' property
     *
     * @return integer
     */
    public function getNum()
    {
        $value = $this->get(self::NUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'relive_total_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReliveTotalTime($value)
    {
        return $this->set(self::RELIVE_TOTAL_TIME, $value);
    }

    /**
     * Returns value of 'relive_total_time' property
     *
     * @return integer
     */
    public function getReliveTotalTime()
    {
        $value = $this->get(self::RELIVE_TOTAL_TIME);
        return $value === null ? (integer)$value : $value;
    }
}
}