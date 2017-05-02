<?php
/**
 * Auto generated from Server.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ServerPVPMatch_L2M message
 */
class PB_ServerPVPMatch_L2M extends \ProtobufMessage
{
    /* Field index constants */
    const MATCH = 1;
    const INDEX = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MATCH => array(
            'name' => 'match',
            'required' => false,
            'type' => '\PB_GamerPVPMatch'
        ),
        self::INDEX => array(
            'name' => 'index',
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
        $this->values[self::MATCH] = null;
        $this->values[self::INDEX] = null;
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
     * Sets value of 'match' property
     *
     * @param \PB_GamerPVPMatch $value Property value
     *
     * @return null
     */
    public function setMatch(\PB_GamerPVPMatch $value=null)
    {
        return $this->set(self::MATCH, $value);
    }

    /**
     * Returns value of 'match' property
     *
     * @return \PB_GamerPVPMatch
     */
    public function getMatch()
    {
        return $this->get(self::MATCH);
    }

    /**
     * Sets value of 'index' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIndex($value)
    {
        return $this->set(self::INDEX, $value);
    }

    /**
     * Returns value of 'index' property
     *
     * @return integer
     */
    public function getIndex()
    {
        $value = $this->get(self::INDEX);
        return $value === null ? (integer)$value : $value;
    }
}
}