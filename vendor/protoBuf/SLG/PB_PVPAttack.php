<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_PVPAttack message
 */
class PB_PVPAttack extends \ProtobufMessage
{
    /* Field index constants */
    const LID = 1;
    const HP = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        $this->values[self::LID] = null;
        $this->values[self::HP] = null;
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
}
}