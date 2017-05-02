<?php
/**
 * Auto generated from Bag.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetBag_C2S message
 */
class PB_GamerGetBag_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const USER_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USER_ID => array(
            'name' => 'user_id',
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
        $this->values[self::USER_ID] = null;
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
     * Sets value of 'user_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUserId($value)
    {
        return $this->set(self::USER_ID, $value);
    }

    /**
     * Returns value of 'user_id' property
     *
     * @return integer
     */
    public function getUserId()
    {
        $value = $this->get(self::USER_ID);
        return $value === null ? (integer)$value : $value;
    }
}
}