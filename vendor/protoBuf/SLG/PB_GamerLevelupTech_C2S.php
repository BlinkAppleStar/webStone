<?php
/**
 * Auto generated from Tech.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerLevelupTech_C2S message
 */
class PB_GamerLevelupTech_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const DIRECT = 2;
    const TECH_ID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DIRECT => array(
            'name' => 'direct',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TECH_ID => array(
            'name' => 'tech_id',
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
        $this->values[self::DIRECT] = null;
        $this->values[self::TECH_ID] = null;
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
     * Sets value of 'direct' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDirect($value)
    {
        return $this->set(self::DIRECT, $value);
    }

    /**
     * Returns value of 'direct' property
     *
     * @return integer
     */
    public function getDirect()
    {
        $value = $this->get(self::DIRECT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'tech_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTechId($value)
    {
        return $this->set(self::TECH_ID, $value);
    }

    /**
     * Returns value of 'tech_id' property
     *
     * @return integer
     */
    public function getTechId()
    {
        $value = $this->get(self::TECH_ID);
        return $value === null ? (integer)$value : $value;
    }
}
}