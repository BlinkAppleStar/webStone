<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_NofityGamerNewFriend message
 */
class PB_NofityGamerNewFriend extends \ProtobufMessage
{
    /* Field index constants */
    const MAIN = 1;
    const DBPB = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MAIN => array(
            'name' => 'main',
            'required' => false,
            'type' => '\PB_Gamer'
        ),
        self::DBPB => array(
            'name' => 'dbpb',
            'required' => false,
            'type' => '\PB_Friend'
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
        $this->values[self::MAIN] = null;
        $this->values[self::DBPB] = null;
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
     * Sets value of 'main' property
     *
     * @param \PB_Gamer $value Property value
     *
     * @return null
     */
    public function setMain(\PB_Gamer $value=null)
    {
        return $this->set(self::MAIN, $value);
    }

    /**
     * Returns value of 'main' property
     *
     * @return \PB_Gamer
     */
    public function getMain()
    {
        return $this->get(self::MAIN);
    }

    /**
     * Sets value of 'dbpb' property
     *
     * @param \PB_Friend $value Property value
     *
     * @return null
     */
    public function setDbpb(\PB_Friend $value=null)
    {
        return $this->set(self::DBPB, $value);
    }

    /**
     * Returns value of 'dbpb' property
     *
     * @return \PB_Friend
     */
    public function getDbpb()
    {
        return $this->get(self::DBPB);
    }
}
}