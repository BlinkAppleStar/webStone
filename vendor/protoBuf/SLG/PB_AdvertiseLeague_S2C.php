<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_AdvertiseLeague_S2C message
 */
class PB_AdvertiseLeague_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const RES_TYPE = 1;
    const RES_NUM = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RES_TYPE => array(
            'name' => 'res_type',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RES_NUM => array(
            'name' => 'res_num',
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
        $this->values[self::RES_TYPE] = array();
        $this->values[self::RES_NUM] = array();
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
     * Appends value to 'res_type' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendResType($value)
    {
        return $this->append(self::RES_TYPE, $value);
    }

    /**
     * Clears 'res_type' list
     *
     * @return null
     */
    public function clearResType()
    {
        return $this->clear(self::RES_TYPE);
    }

    /**
     * Returns 'res_type' list
     *
     * @return integer[]
     */
    public function getResType()
    {
        return $this->get(self::RES_TYPE);
    }

    /**
     * Returns 'res_type' iterator
     *
     * @return \ArrayIterator
     */
    public function getResTypeIterator()
    {
        return new \ArrayIterator($this->get(self::RES_TYPE));
    }

    /**
     * Returns element from 'res_type' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getResTypeAt($offset)
    {
        return $this->get(self::RES_TYPE, $offset);
    }

    /**
     * Returns count of 'res_type' list
     *
     * @return int
     */
    public function getResTypeCount()
    {
        return $this->count(self::RES_TYPE);
    }

    /**
     * Appends value to 'res_num' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendResNum($value)
    {
        return $this->append(self::RES_NUM, $value);
    }

    /**
     * Clears 'res_num' list
     *
     * @return null
     */
    public function clearResNum()
    {
        return $this->clear(self::RES_NUM);
    }

    /**
     * Returns 'res_num' list
     *
     * @return integer[]
     */
    public function getResNum()
    {
        return $this->get(self::RES_NUM);
    }

    /**
     * Returns 'res_num' iterator
     *
     * @return \ArrayIterator
     */
    public function getResNumIterator()
    {
        return new \ArrayIterator($this->get(self::RES_NUM));
    }

    /**
     * Returns element from 'res_num' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getResNumAt($offset)
    {
        return $this->get(self::RES_NUM, $offset);
    }

    /**
     * Returns count of 'res_num' list
     *
     * @return int
     */
    public function getResNumCount()
    {
        return $this->count(self::RES_NUM);
    }
}
}