<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_RepairCityWall_S2C message
 */
class PB_RepairCityWall_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const HP = 1;
    const REPAIR_TIME = 2;
    const FIRE_BEGIN_TIME = 3;
    const FIRE_STATE_TIME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::HP => array(
            'name' => 'hp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REPAIR_TIME => array(
            'name' => 'repair_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FIRE_BEGIN_TIME => array(
            'name' => 'fire_begin_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FIRE_STATE_TIME => array(
            'name' => 'fire_state_time',
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
        $this->values[self::HP] = null;
        $this->values[self::REPAIR_TIME] = null;
        $this->values[self::FIRE_BEGIN_TIME] = null;
        $this->values[self::FIRE_STATE_TIME] = null;
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
     * Sets value of 'repair_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRepairTime($value)
    {
        return $this->set(self::REPAIR_TIME, $value);
    }

    /**
     * Returns value of 'repair_time' property
     *
     * @return integer
     */
    public function getRepairTime()
    {
        $value = $this->get(self::REPAIR_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'fire_begin_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFireBeginTime($value)
    {
        return $this->set(self::FIRE_BEGIN_TIME, $value);
    }

    /**
     * Returns value of 'fire_begin_time' property
     *
     * @return integer
     */
    public function getFireBeginTime()
    {
        $value = $this->get(self::FIRE_BEGIN_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'fire_state_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFireStateTime($value)
    {
        return $this->set(self::FIRE_STATE_TIME, $value);
    }

    /**
     * Returns value of 'fire_state_time' property
     *
     * @return integer
     */
    public function getFireStateTime()
    {
        $value = $this->get(self::FIRE_STATE_TIME);
        return $value === null ? (integer)$value : $value;
    }
}
}