<?php
/**
 * Auto generated from Build.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_BuyShop_S2C message
 */
class PB_BuyShop_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const COST_RES_TYPE = 1;
    const RES_NUM = 2;
    const ITEM_ID = 3;
    const ITEM_NUM = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COST_RES_TYPE => array(
            'name' => 'cost_res_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RES_NUM => array(
            'name' => 'res_num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEM_ID => array(
            'name' => 'item_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ITEM_NUM => array(
            'name' => 'item_num',
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
        $this->values[self::COST_RES_TYPE] = null;
        $this->values[self::RES_NUM] = null;
        $this->values[self::ITEM_ID] = null;
        $this->values[self::ITEM_NUM] = null;
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
     * Sets value of 'cost_res_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCostResType($value)
    {
        return $this->set(self::COST_RES_TYPE, $value);
    }

    /**
     * Returns value of 'cost_res_type' property
     *
     * @return integer
     */
    public function getCostResType()
    {
        $value = $this->get(self::COST_RES_TYPE);
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

    /**
     * Sets value of 'item_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setItemId($value)
    {
        return $this->set(self::ITEM_ID, $value);
    }

    /**
     * Returns value of 'item_id' property
     *
     * @return integer
     */
    public function getItemId()
    {
        $value = $this->get(self::ITEM_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'item_num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setItemNum($value)
    {
        return $this->set(self::ITEM_NUM, $value);
    }

    /**
     * Returns value of 'item_num' property
     *
     * @return integer
     */
    public function getItemNum()
    {
        $value = $this->get(self::ITEM_NUM);
        return $value === null ? (integer)$value : $value;
    }
}
}