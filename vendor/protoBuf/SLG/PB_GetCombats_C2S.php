<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GetCombats_C2S message
 */
class PB_GetCombats_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const HKEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HKEY => array(
            'name' => 'hkey',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::ID] = null;
        $this->values[self::HKEY] = array();
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
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'hkey' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendHkey($value)
    {
        return $this->append(self::HKEY, $value);
    }

    /**
     * Clears 'hkey' list
     *
     * @return null
     */
    public function clearHkey()
    {
        return $this->clear(self::HKEY);
    }

    /**
     * Returns 'hkey' list
     *
     * @return string[]
     */
    public function getHkey()
    {
        return $this->get(self::HKEY);
    }

    /**
     * Returns 'hkey' iterator
     *
     * @return \ArrayIterator
     */
    public function getHkeyIterator()
    {
        return new \ArrayIterator($this->get(self::HKEY));
    }

    /**
     * Returns element from 'hkey' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getHkeyAt($offset)
    {
        return $this->get(self::HKEY, $offset);
    }

    /**
     * Returns count of 'hkey' list
     *
     * @return int
     */
    public function getHkeyCount()
    {
        return $this->count(self::HKEY);
    }
}
}