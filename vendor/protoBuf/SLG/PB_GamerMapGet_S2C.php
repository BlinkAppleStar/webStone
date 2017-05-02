<?php
/**
 * Auto generated from Map.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerMapGet_S2C message
 */
class PB_GamerMapGet_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const RES = 1;
    const MAX_SOLDIER = 2;
    const GAMER_STAMINA = 3;
    const OWNER = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RES => array(
            'name' => 'res',
            'required' => false,
            'type' => '\PB_Resource'
        ),
        self::MAX_SOLDIER => array(
            'name' => 'max_soldier',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GAMER_STAMINA => array(
            'name' => 'gamer_stamina',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OWNER => array(
            'name' => 'owner',
            'required' => false,
            'type' => '\PB_MNOwner'
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
        $this->values[self::RES] = null;
        $this->values[self::MAX_SOLDIER] = null;
        $this->values[self::GAMER_STAMINA] = null;
        $this->values[self::OWNER] = null;
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
     * Sets value of 'res' property
     *
     * @param \PB_Resource $value Property value
     *
     * @return null
     */
    public function setRes(\PB_Resource $value=null)
    {
        return $this->set(self::RES, $value);
    }

    /**
     * Returns value of 'res' property
     *
     * @return \PB_Resource
     */
    public function getRes()
    {
        return $this->get(self::RES);
    }

    /**
     * Sets value of 'max_soldier' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxSoldier($value)
    {
        return $this->set(self::MAX_SOLDIER, $value);
    }

    /**
     * Returns value of 'max_soldier' property
     *
     * @return integer
     */
    public function getMaxSoldier()
    {
        $value = $this->get(self::MAX_SOLDIER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'gamer_stamina' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGamerStamina($value)
    {
        return $this->set(self::GAMER_STAMINA, $value);
    }

    /**
     * Returns value of 'gamer_stamina' property
     *
     * @return integer
     */
    public function getGamerStamina()
    {
        $value = $this->get(self::GAMER_STAMINA);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'owner' property
     *
     * @param \PB_MNOwner $value Property value
     *
     * @return null
     */
    public function setOwner(\PB_MNOwner $value=null)
    {
        return $this->set(self::OWNER, $value);
    }

    /**
     * Returns value of 'owner' property
     *
     * @return \PB_MNOwner
     */
    public function getOwner()
    {
        return $this->get(self::OWNER);
    }
}
}