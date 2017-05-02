<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerPVP_C2S message
 */
class PB_GamerPVP_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const STATE = 1;
    const SESSION = 2;
    const GID = 3;
    const BID = 4;
    const LOADING = 5;
    const TICK = 6;
    const SOLDIER = 100;
    const BUILD = 101;
    const ERROR = 102;
    const SOE = 103;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SESSION => array(
            'name' => 'session',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GID => array(
            'name' => 'gid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BID => array(
            'name' => 'bid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LOADING => array(
            'name' => 'loading',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TICK => array(
            'name' => 'tick',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOLDIER => array(
            'name' => 'soldier',
            'repeated' => true,
            'type' => '\PB_PVPSoldier'
        ),
        self::BUILD => array(
            'name' => 'build',
            'repeated' => true,
            'type' => '\PB_PVPBuild'
        ),
        self::ERROR => array(
            'name' => 'error',
            'repeated' => true,
            'type' => '\PB_PVPError'
        ),
        self::SOE => array(
            'name' => 'soe',
            'repeated' => true,
            'type' => '\PB_SOEPVP'
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
        $this->values[self::STATE] = null;
        $this->values[self::SESSION] = null;
        $this->values[self::GID] = null;
        $this->values[self::BID] = null;
        $this->values[self::LOADING] = null;
        $this->values[self::TICK] = null;
        $this->values[self::SOLDIER] = array();
        $this->values[self::BUILD] = array();
        $this->values[self::ERROR] = array();
        $this->values[self::SOE] = array();
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
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'session' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSession($value)
    {
        return $this->set(self::SESSION, $value);
    }

    /**
     * Returns value of 'session' property
     *
     * @return string
     */
    public function getSession()
    {
        $value = $this->get(self::SESSION);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'bid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBid($value)
    {
        return $this->set(self::BID, $value);
    }

    /**
     * Returns value of 'bid' property
     *
     * @return integer
     */
    public function getBid()
    {
        $value = $this->get(self::BID);
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

    /**
     * Sets value of 'tick' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTick($value)
    {
        return $this->set(self::TICK, $value);
    }

    /**
     * Returns value of 'tick' property
     *
     * @return integer
     */
    public function getTick()
    {
        $value = $this->get(self::TICK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'soldier' list
     *
     * @param \PB_PVPSoldier $value Value to append
     *
     * @return null
     */
    public function appendSoldier(\PB_PVPSoldier $value)
    {
        return $this->append(self::SOLDIER, $value);
    }

    /**
     * Clears 'soldier' list
     *
     * @return null
     */
    public function clearSoldier()
    {
        return $this->clear(self::SOLDIER);
    }

    /**
     * Returns 'soldier' list
     *
     * @return \PB_PVPSoldier[]
     */
    public function getSoldier()
    {
        return $this->get(self::SOLDIER);
    }

    /**
     * Returns 'soldier' iterator
     *
     * @return \ArrayIterator
     */
    public function getSoldierIterator()
    {
        return new \ArrayIterator($this->get(self::SOLDIER));
    }

    /**
     * Returns element from 'soldier' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_PVPSoldier
     */
    public function getSoldierAt($offset)
    {
        return $this->get(self::SOLDIER, $offset);
    }

    /**
     * Returns count of 'soldier' list
     *
     * @return int
     */
    public function getSoldierCount()
    {
        return $this->count(self::SOLDIER);
    }

    /**
     * Appends value to 'build' list
     *
     * @param \PB_PVPBuild $value Value to append
     *
     * @return null
     */
    public function appendBuild(\PB_PVPBuild $value)
    {
        return $this->append(self::BUILD, $value);
    }

    /**
     * Clears 'build' list
     *
     * @return null
     */
    public function clearBuild()
    {
        return $this->clear(self::BUILD);
    }

    /**
     * Returns 'build' list
     *
     * @return \PB_PVPBuild[]
     */
    public function getBuild()
    {
        return $this->get(self::BUILD);
    }

    /**
     * Returns 'build' iterator
     *
     * @return \ArrayIterator
     */
    public function getBuildIterator()
    {
        return new \ArrayIterator($this->get(self::BUILD));
    }

    /**
     * Returns element from 'build' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_PVPBuild
     */
    public function getBuildAt($offset)
    {
        return $this->get(self::BUILD, $offset);
    }

    /**
     * Returns count of 'build' list
     *
     * @return int
     */
    public function getBuildCount()
    {
        return $this->count(self::BUILD);
    }

    /**
     * Appends value to 'error' list
     *
     * @param \PB_PVPError $value Value to append
     *
     * @return null
     */
    public function appendError(\PB_PVPError $value)
    {
        return $this->append(self::ERROR, $value);
    }

    /**
     * Clears 'error' list
     *
     * @return null
     */
    public function clearError()
    {
        return $this->clear(self::ERROR);
    }

    /**
     * Returns 'error' list
     *
     * @return \PB_PVPError[]
     */
    public function getError()
    {
        return $this->get(self::ERROR);
    }

    /**
     * Returns 'error' iterator
     *
     * @return \ArrayIterator
     */
    public function getErrorIterator()
    {
        return new \ArrayIterator($this->get(self::ERROR));
    }

    /**
     * Returns element from 'error' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_PVPError
     */
    public function getErrorAt($offset)
    {
        return $this->get(self::ERROR, $offset);
    }

    /**
     * Returns count of 'error' list
     *
     * @return int
     */
    public function getErrorCount()
    {
        return $this->count(self::ERROR);
    }

    /**
     * Appends value to 'soe' list
     *
     * @param \PB_SOEPVP $value Value to append
     *
     * @return null
     */
    public function appendSoe(\PB_SOEPVP $value)
    {
        return $this->append(self::SOE, $value);
    }

    /**
     * Clears 'soe' list
     *
     * @return null
     */
    public function clearSoe()
    {
        return $this->clear(self::SOE);
    }

    /**
     * Returns 'soe' list
     *
     * @return \PB_SOEPVP[]
     */
    public function getSoe()
    {
        return $this->get(self::SOE);
    }

    /**
     * Returns 'soe' iterator
     *
     * @return \ArrayIterator
     */
    public function getSoeIterator()
    {
        return new \ArrayIterator($this->get(self::SOE));
    }

    /**
     * Returns element from 'soe' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_SOEPVP
     */
    public function getSoeAt($offset)
    {
        return $this->get(self::SOE, $offset);
    }

    /**
     * Returns count of 'soe' list
     *
     * @return int
     */
    public function getSoeCount()
    {
        return $this->count(self::SOE);
    }
}
}