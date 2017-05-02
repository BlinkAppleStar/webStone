<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_NotifyGamerCityMove message
 */
class PB_NotifyGamerCityMove extends \ProtobufMessage
{
    /* Field index constants */
    const OLDPOS = 1;
    const NEWPOS = 2;
    const GAMER = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::OLDPOS => array(
            'name' => 'oldpos',
            'required' => false,
            'type' => '\PB_Vec2'
        ),
        self::NEWPOS => array(
            'name' => 'newpos',
            'required' => false,
            'type' => '\PB_Vec3'
        ),
        self::GAMER => array(
            'name' => 'gamer',
            'required' => false,
            'type' => '\PB_Gamer'
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
        $this->values[self::OLDPOS] = null;
        $this->values[self::NEWPOS] = null;
        $this->values[self::GAMER] = null;
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
     * Sets value of 'oldpos' property
     *
     * @param \PB_Vec2 $value Property value
     *
     * @return null
     */
    public function setOldpos(\PB_Vec2 $value=null)
    {
        return $this->set(self::OLDPOS, $value);
    }

    /**
     * Returns value of 'oldpos' property
     *
     * @return \PB_Vec2
     */
    public function getOldpos()
    {
        return $this->get(self::OLDPOS);
    }

    /**
     * Sets value of 'newpos' property
     *
     * @param \PB_Vec3 $value Property value
     *
     * @return null
     */
    public function setNewpos(\PB_Vec3 $value=null)
    {
        return $this->set(self::NEWPOS, $value);
    }

    /**
     * Returns value of 'newpos' property
     *
     * @return \PB_Vec3
     */
    public function getNewpos()
    {
        return $this->get(self::NEWPOS);
    }

    /**
     * Sets value of 'gamer' property
     *
     * @param \PB_Gamer $value Property value
     *
     * @return null
     */
    public function setGamer(\PB_Gamer $value=null)
    {
        return $this->set(self::GAMER, $value);
    }

    /**
     * Returns value of 'gamer' property
     *
     * @return \PB_Gamer
     */
    public function getGamer()
    {
        return $this->get(self::GAMER);
    }
}
}