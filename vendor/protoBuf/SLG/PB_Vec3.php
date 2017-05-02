<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_Vec3 message
 */
class PB_Vec3 extends \ProtobufMessage
{
    /* Field index constants */
    const X = 1;
    const Y = 2;
    const Z = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::X => array(
            'name' => 'x',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::Y => array(
            'name' => 'y',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::Z => array(
            'name' => 'z',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
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
        $this->values[self::X] = null;
        $this->values[self::Y] = null;
        $this->values[self::Z] = null;
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
     * Sets value of 'x' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setX($value)
    {
        return $this->set(self::X, $value);
    }

    /**
     * Returns value of 'x' property
     *
     * @return double
     */
    public function getX()
    {
        $value = $this->get(self::X);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'y' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setY($value)
    {
        return $this->set(self::Y, $value);
    }

    /**
     * Returns value of 'y' property
     *
     * @return double
     */
    public function getY()
    {
        $value = $this->get(self::Y);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'z' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setZ($value)
    {
        return $this->set(self::Z, $value);
    }

    /**
     * Returns value of 'z' property
     *
     * @return double
     */
    public function getZ()
    {
        $value = $this->get(self::Z);
        return $value === null ? (double)$value : $value;
    }
}
}