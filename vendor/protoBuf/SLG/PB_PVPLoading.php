<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_PVPLoading message
 */
class PB_PVPLoading extends \ProtobufMessage
{
    /* Field index constants */
    const GID = 1;
    const LOADING = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GID => array(
            'name' => 'gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOADING => array(
            'name' => 'loading',
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
        $this->values[self::LOADING] = null;
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
     * Sets value of 'loading' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoading($value)
    {
        return $this->set(self::LOADING, $value);
    }

    /**
     * Returns value of 'loading' property
     *
     * @return integer
     */
    public function getLoading()
    {
        $value = $this->get(self::LOADING);
        return $value === null ? (integer)$value : $value;
    }
}
}