<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_SOEPVP message
 */
class PB_SOEPVP extends \ProtobufMessage
{
    /* Field index constants */
    const GID = 1;
    const FRAME = 2;
    const X = 3;
    const Z = 4;
    const TYPE = 5;
    const DATA = 6;
    const CINDEX = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GID => array(
            'name' => 'gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRAME => array(
            'name' => 'frame',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::X => array(
            'name' => 'x',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::Z => array(
            'name' => 'z',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATA => array(
            'name' => 'data',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CINDEX => array(
            'name' => 'cindex',
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
        $this->values[self::GID] = null;
        $this->values[self::FRAME] = null;
        $this->values[self::X] = null;
        $this->values[self::Z] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::DATA] = array();
        $this->values[self::CINDEX] = null;
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
     * Sets value of 'gid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGid($value)
    {
        return $this->set(self::GID, $value);
    }

    /**
     * Returns value of 'gid' property
     *
     * @return integer
     */
    public function getGid()
    {
        $value = $this->get(self::GID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'frame' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFrame($value)
    {
        return $this->set(self::FRAME, $value);
    }

    /**
     * Returns value of 'frame' property
     *
     * @return integer
     */
    public function getFrame()
    {
        $value = $this->get(self::FRAME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'x' property
     *
     * @param integer $value Property value
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
     * @return integer
     */
    public function getX()
    {
        $value = $this->get(self::X);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'z' property
     *
     * @param integer $value Property value
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
     * @return integer
     */
    public function getZ()
    {
        $value = $this->get(self::Z);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'data' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendData($value)
    {
        return $this->append(self::DATA, $value);
    }

    /**
     * Clears 'data' list
     *
     * @return null
     */
    public function clearData()
    {
        return $this->clear(self::DATA);
    }

    /**
     * Returns 'data' list
     *
     * @return integer[]
     */
    public function getData()
    {
        return $this->get(self::DATA);
    }

    /**
     * Returns 'data' iterator
     *
     * @return \ArrayIterator
     */
    public function getDataIterator()
    {
        return new \ArrayIterator($this->get(self::DATA));
    }

    /**
     * Returns element from 'data' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getDataAt($offset)
    {
        return $this->get(self::DATA, $offset);
    }

    /**
     * Returns count of 'data' list
     *
     * @return int
     */
    public function getDataCount()
    {
        return $this->count(self::DATA);
    }

    /**
     * Sets value of 'cindex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCindex($value)
    {
        return $this->set(self::CINDEX, $value);
    }

    /**
     * Returns value of 'cindex' property
     *
     * @return integer
     */
    public function getCindex()
    {
        $value = $this->get(self::CINDEX);
        return $value === null ? (integer)$value : $value;
    }
}
}