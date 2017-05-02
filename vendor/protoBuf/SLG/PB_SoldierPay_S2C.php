<?php
/**
 * Auto generated from Soldier.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_SoldierPay_S2C message
 */
class PB_SoldierPay_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const RES_TYPE = 1;
    const RES_NUM = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RES_TYPE => array(
            'name' => 'res_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RES_NUM => array(
            'name' => 'res_num',
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
        $this->values[self::RES_TYPE] = null;
        $this->values[self::RES_NUM] = null;
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
     * Sets value of 'res_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResType($value)
    {
        return $this->set(self::RES_TYPE, $value);
    }

    /**
     * Returns value of 'res_type' property
     *
     * @return integer
     */
    public function getResType()
    {
        $value = $this->get(self::RES_TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'res_num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResNum($value)
    {
        return $this->set(self::RES_NUM, $value);
    }

    /**
     * Returns value of 'res_num' property
     *
     * @return integer
     */
    public function getResNum()
    {
        $value = $this->get(self::RES_NUM);
        return $value === null ? (integer)$value : $value;
    }
}
}