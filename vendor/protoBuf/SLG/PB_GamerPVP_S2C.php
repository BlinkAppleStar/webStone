<?php
/**
 * Auto generated from PVP.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerPVP_S2C message
 */
class PB_GamerPVP_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const TICK = 1;
    const BID = 2;
    const STATE = 3;
    const SOLDIER = 100;
    const BUILD = 101;
    const ERROR = 102;
    const ALIVE = 103;
    const SOE = 104;
    const NOTIFY = 105;
    const LOADING = 106;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TICK => array(
            'name' => 'tick',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BID => array(
            'name' => 'bid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STATE => array(
            'name' => 'state',
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
        self::ALIVE => array(
            'name' => 'alive',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOE => array(
            'name' => 'soe',
            'repeated' => true,
            'type' => '\PB_SOEPVP'
        ),
        self::NOTIFY => array(
            'name' => 'notify',
            'repeated' => true,
            'type' => '\PB_PVPNotify'
        ),
        self::LOADING => array(
            'name' => 'loading',
            'repeated' => true,
            'type' => '\PB_PVPLoading'
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
        $this->values[self::TICK] = null;
        $this->values[self::BID] = null;
        $this->values[self::STATE] = null;
        $this->values[self::SOLDIER] = array();
        $this->values[self::BUILD] = array();
        $this->values[self::ERROR] = array();
        $this->values[self::ALIVE] = array();
        $this->values[self::SOE] = array();
        $this->values[self::NOTIFY] = array();
        $this->values[self::LOADING] = array();
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
     * Appends value to 'alive' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendAlive($value)
    {
        return $this->append(self::ALIVE, $value);
    }

    /**
     * Clears 'alive' list
     *
     * @return null
     */
    public function clearAlive()
    {
        return $this->clear(self::ALIVE);
    }

    /**
     * Returns 'alive' list
     *
     * @return integer[]
     */
    public function getAlive()
    {
        return $this->get(self::ALIVE);
    }

    /**
     * Returns 'alive' iterator
     *
     * @return \ArrayIterator
     */
    public function getAliveIterator()
    {
        return new \ArrayIterator($this->get(self::ALIVE));
    }

    /**
     * Returns element from 'alive' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getAliveAt($offset)
    {
        return $this->get(self::ALIVE, $offset);
    }

    /**
     * Returns count of 'alive' list
     *
     * @return int
     */
    public function getAliveCount()
    {
        return $this->count(self::ALIVE);
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

    /**
     * Appends value to 'notify' list
     *
     * @param \PB_PVPNotify $value Value to append
     *
     * @return null
     */
    public function appendNotify(\PB_PVPNotify $value)
    {
        return $this->append(self::NOTIFY, $value);
    }

    /**
     * Clears 'notify' list
     *
     * @return null
     */
    public function clearNotify()
    {
        return $this->clear(self::NOTIFY);
    }

    /**
     * Returns 'notify' list
     *
     * @return \PB_PVPNotify[]
     */
    public function getNotify()
    {
        return $this->get(self::NOTIFY);
    }

    /**
     * Returns 'notify' iterator
     *
     * @return \ArrayIterator
     */
    public function getNotifyIterator()
    {
        return new \ArrayIterator($this->get(self::NOTIFY));
    }

    /**
     * Returns element from 'notify' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_PVPNotify
     */
    public function getNotifyAt($offset)
    {
        return $this->get(self::NOTIFY, $offset);
    }

    /**
     * Returns count of 'notify' list
     *
     * @return int
     */
    public function getNotifyCount()
    {
        return $this->count(self::NOTIFY);
    }

    /**
     * Appends value to 'loading' list
     *
     * @param \PB_PVPLoading $value Value to append
     *
     * @return null
     */
    public function appendLoading(\PB_PVPLoading $value)
    {
        return $this->append(self::LOADING, $value);
    }

    /**
     * Clears 'loading' list
     *
     * @return null
     */
    public function clearLoading()
    {
        return $this->clear(self::LOADING);
    }

    /**
     * Returns 'loading' list
     *
     * @return \PB_PVPLoading[]
     */
    public function getLoading()
    {
        return $this->get(self::LOADING);
    }

    /**
     * Returns 'loading' iterator
     *
     * @return \ArrayIterator
     */
    public function getLoadingIterator()
    {
        return new \ArrayIterator($this->get(self::LOADING));
    }

    /**
     * Returns element from 'loading' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_PVPLoading
     */
    public function getLoadingAt($offset)
    {
        return $this->get(self::LOADING, $offset);
    }

    /**
     * Returns count of 'loading' list
     *
     * @return int
     */
    public function getLoadingCount()
    {
        return $this->count(self::LOADING);
    }
}
}