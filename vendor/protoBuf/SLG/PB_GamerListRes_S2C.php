<?php
/**
 * Auto generated from Gamer.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerListRes_S2C message
 */
class PB_GamerListRes_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const RES = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RES => array(
            'name' => 'res',
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
        $this->values[self::RES] = array();
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
     * Appends value to 'res' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendRes($value)
    {
        return $this->append(self::RES, $value);
    }

    /**
     * Clears 'res' list
     *
     * @return null
     */
    public function clearRes()
    {
        return $this->clear(self::RES);
    }

    /**
     * Returns 'res' list
     *
     * @return integer[]
     */
    public function getRes()
    {
        return $this->get(self::RES);
    }

    /**
     * Returns 'res' iterator
     *
     * @return \ArrayIterator
     */
    public function getResIterator()
    {
        return new \ArrayIterator($this->get(self::RES));
    }

    /**
     * Returns element from 'res' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getResAt($offset)
    {
        return $this->get(self::RES, $offset);
    }

    /**
     * Returns count of 'res' list
     *
     * @return int
     */
    public function getResCount()
    {
        return $this->count(self::RES);
    }
}
}