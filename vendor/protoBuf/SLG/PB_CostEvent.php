<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_CostEvent message
 */
class PB_CostEvent extends \ProtobufMessage
{
    /* Field index constants */
    const RES_TYPE = 1;
    const COUNT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RES_TYPE => array(
            'name' => 'res_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COUNT => array(
            'name' => 'count',
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
        $this->values[self::COUNT] = null;
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
     * Sets value of 'count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCount($value)
    {
        return $this->set(self::COUNT, $value);
    }

    /**
     * Returns value of 'count' property
     *
     * @return integer
     */
    public function getCount()
    {
        $value = $this->get(self::COUNT);
        return $value === null ? (integer)$value : $value;
    }
}
}