<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_AllySoldierInfo message
 */
class PB_AllySoldierInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SOLDIER_ID = 1;
    const NUM = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SOLDIER_ID => array(
            'name' => 'soldier_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NUM => array(
            'name' => 'num',
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
        $this->values[self::SOLDIER_ID] = null;
        $this->values[self::NUM] = null;
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
     * Sets value of 'soldier_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSoldierId($value)
    {
        return $this->set(self::SOLDIER_ID, $value);
    }

    /**
     * Returns value of 'soldier_id' property
     *
     * @return integer
     */
    public function getSoldierId()
    {
        $value = $this->get(self::SOLDIER_ID);
        return $value === null ? (integer)$value : $value;
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
}
}