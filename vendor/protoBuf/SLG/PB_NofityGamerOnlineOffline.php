<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_NofityGamerOnlineOffline message
 */
class PB_NofityGamerOnlineOffline extends \ProtobufMessage
{
    /* Field index constants */
    const ONLINE = 1;
    const OFFLINE = 2;
    const UPDATE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ONLINE => array(
            'name' => 'online',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OFFLINE => array(
            'name' => 'offline',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UPDATE => array(
            'name' => 'update',
            'repeated' => true,
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
        $this->values[self::ONLINE] = array();
        $this->values[self::OFFLINE] = array();
        $this->values[self::UPDATE] = array();
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
     * Appends value to 'online' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendOnline($value)
    {
        return $this->append(self::ONLINE, $value);
    }

    /**
     * Clears 'online' list
     *
     * @return null
     */
    public function clearOnline()
    {
        return $this->clear(self::ONLINE);
    }

    /**
     * Returns 'online' list
     *
     * @return integer[]
     */
    public function getOnline()
    {
        return $this->get(self::ONLINE);
    }

    /**
     * Returns 'online' iterator
     *
     * @return \ArrayIterator
     */
    public function getOnlineIterator()
    {
        return new \ArrayIterator($this->get(self::ONLINE));
    }

    /**
     * Returns element from 'online' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getOnlineAt($offset)
    {
        return $this->get(self::ONLINE, $offset);
    }

    /**
     * Returns count of 'online' list
     *
     * @return int
     */
    public function getOnlineCount()
    {
        return $this->count(self::ONLINE);
    }

    /**
     * Appends value to 'offline' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendOffline($value)
    {
        return $this->append(self::OFFLINE, $value);
    }

    /**
     * Clears 'offline' list
     *
     * @return null
     */
    public function clearOffline()
    {
        return $this->clear(self::OFFLINE);
    }

    /**
     * Returns 'offline' list
     *
     * @return integer[]
     */
    public function getOffline()
    {
        return $this->get(self::OFFLINE);
    }

    /**
     * Returns 'offline' iterator
     *
     * @return \ArrayIterator
     */
    public function getOfflineIterator()
    {
        return new \ArrayIterator($this->get(self::OFFLINE));
    }

    /**
     * Returns element from 'offline' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getOfflineAt($offset)
    {
        return $this->get(self::OFFLINE, $offset);
    }

    /**
     * Returns count of 'offline' list
     *
     * @return int
     */
    public function getOfflineCount()
    {
        return $this->count(self::OFFLINE);
    }

    /**
     * Appends value to 'update' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendUpdate($value)
    {
        return $this->append(self::UPDATE, $value);
    }

    /**
     * Clears 'update' list
     *
     * @return null
     */
    public function clearUpdate()
    {
        return $this->clear(self::UPDATE);
    }

    /**
     * Returns 'update' list
     *
     * @return integer[]
     */
    public function getUpdate()
    {
        return $this->get(self::UPDATE);
    }

    /**
     * Returns 'update' iterator
     *
     * @return \ArrayIterator
     */
    public function getUpdateIterator()
    {
        return new \ArrayIterator($this->get(self::UPDATE));
    }

    /**
     * Returns element from 'update' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getUpdateAt($offset)
    {
        return $this->get(self::UPDATE, $offset);
    }

    /**
     * Returns count of 'update' list
     *
     * @return int
     */
    public function getUpdateCount()
    {
        return $this->count(self::UPDATE);
    }
}
}