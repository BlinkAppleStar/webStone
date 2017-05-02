<?php
/**
 * Auto generated from Card.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerDelCardGroup_C2S message
 */
class PB_GamerDelCardGroup_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const LID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        $this->values[self::LID] = null;
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
}
}