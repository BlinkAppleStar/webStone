<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_Wish_C2S message
 */
class PB_Wish_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const RES_INDEX = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RES_INDEX => array(
            'name' => 'res_index',
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
        $this->values[self::RES_INDEX] = null;
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
     * Sets value of 'res_index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResIndex($value)
    {
        return $this->set(self::RES_INDEX, $value);
    }

    /**
     * Returns value of 'res_index' property
     *
     * @return integer
     */
    public function getResIndex()
    {
        $value = $this->get(self::RES_INDEX);
        return $value === null ? (integer)$value : $value;
    }
}
}