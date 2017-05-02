<?php
/**
 * Auto generated from Server.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerEvent message
 */
class PB_GamerEvent extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const TYPE = 2;
    const DATAS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATAS => array(
            'name' => 'datas',
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
        $this->values[self::TYPE] = null;
        $this->values[self::DATAS] = array();
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
     * Appends value to 'datas' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendDatas($value)
    {
        return $this->append(self::DATAS, $value);
    }

    /**
     * Clears 'datas' list
     *
     * @return null
     */
    public function clearDatas()
    {
        return $this->clear(self::DATAS);
    }

    /**
     * Returns 'datas' list
     *
     * @return string[]
     */
    public function getDatas()
    {
        return $this->get(self::DATAS);
    }

    /**
     * Returns 'datas' iterator
     *
     * @return \ArrayIterator
     */
    public function getDatasIterator()
    {
        return new \ArrayIterator($this->get(self::DATAS));
    }

    /**
     * Returns element from 'datas' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getDatasAt($offset)
    {
        return $this->get(self::DATAS, $offset);
    }

    /**
     * Returns count of 'datas' list
     *
     * @return int
     */
    public function getDatasCount()
    {
        return $this->count(self::DATAS);
    }
}
}