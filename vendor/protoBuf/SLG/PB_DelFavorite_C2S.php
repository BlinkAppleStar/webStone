<?php
/**
 * Auto generated from Map.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_DelFavorite_C2S message
 */
class PB_DelFavorite_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const POS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::POS => array(
            'name' => 'pos',
            'required' => false,
            'type' => '\PB_Vec2'
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
        $this->values[self::POS] = null;
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
     * Sets value of 'pos' property
     *
     * @param \PB_Vec2 $value Property value
     *
     * @return null
     */
    public function setPos(\PB_Vec2 $value=null)
    {
        return $this->set(self::POS, $value);
    }

    /**
     * Returns value of 'pos' property
     *
     * @return \PB_Vec2
     */
    public function getPos()
    {
        return $this->get(self::POS);
    }
}
}