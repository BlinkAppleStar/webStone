<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LeagueTempleChoice_C2S message
 */
class PB_LeagueTempleChoice_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const FLOOR_ID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FLOOR_ID => array(
            'name' => 'floor_id',
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
        $this->values[self::FLOOR_ID] = null;
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
     * Sets value of 'floor_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFloorId($value)
    {
        return $this->set(self::FLOOR_ID, $value);
    }

    /**
     * Returns value of 'floor_id' property
     *
     * @return integer
     */
    public function getFloorId()
    {
        $value = $this->get(self::FLOOR_ID);
        return $value === null ? (integer)$value : $value;
    }
}
}