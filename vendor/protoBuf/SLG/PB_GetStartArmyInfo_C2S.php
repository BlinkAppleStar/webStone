<?php
/**
 * Auto generated from Map.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GetStartArmyInfo_C2S message
 */
class PB_GetStartArmyInfo_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const ARMY_TYPE = 2;
    const TARGET_POS = 3;
    const IS_CREATE_ASSEMBLE = 4;
    const HKEY = 5;
    const TARGET_GID = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ARMY_TYPE => array(
            'name' => 'army_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TARGET_POS => array(
            'name' => 'target_pos',
            'required' => false,
            'type' => '\PB_Vec2'
        ),
        self::IS_CREATE_ASSEMBLE => array(
            'name' => 'is_create_assemble',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::HKEY => array(
            'name' => 'hkey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TARGET_GID => array(
            'name' => 'target_gid',
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
        $this->values[self::ARMY_TYPE] = null;
        $this->values[self::TARGET_POS] = null;
        $this->values[self::IS_CREATE_ASSEMBLE] = null;
        $this->values[self::HKEY] = null;
        $this->values[self::TARGET_GID] = null;
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
     * Sets value of 'army_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setArmyType($value)
    {
        return $this->set(self::ARMY_TYPE, $value);
    }

    /**
     * Returns value of 'army_type' property
     *
     * @return integer
     */
    public function getArmyType()
    {
        $value = $this->get(self::ARMY_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'target_pos' property
     *
     * @param \PB_Vec2 $value Property value
     *
     * @return null
     */
    public function setTargetPos(\PB_Vec2 $value=null)
    {
        return $this->set(self::TARGET_POS, $value);
    }

    /**
     * Returns value of 'target_pos' property
     *
     * @return \PB_Vec2
     */
    public function getTargetPos()
    {
        return $this->get(self::TARGET_POS);
    }

    /**
     * Sets value of 'is_create_assemble' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsCreateAssemble($value)
    {
        return $this->set(self::IS_CREATE_ASSEMBLE, $value);
    }

    /**
     * Returns value of 'is_create_assemble' property
     *
     * @return boolean
     */
    public function getIsCreateAssemble()
    {
        $value = $this->get(self::IS_CREATE_ASSEMBLE);
        return $value === null ? (boolean)$value : $value;
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
     * Sets value of 'target_gid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTargetGid($value)
    {
        return $this->set(self::TARGET_GID, $value);
    }

    /**
     * Returns value of 'target_gid' property
     *
     * @return integer
     */
    public function getTargetGid()
    {
        $value = $this->get(self::TARGET_GID);
        return $value === null ? (integer)$value : $value;
    }
}
}