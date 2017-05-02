<?php
/**
 * Auto generated from Quest.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_TakeQuestAward_S2C message
 */
class PB_TakeQuestAward_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const QUEST_ID = 1;
    const RES_TYPE = 2;
    const RES_NUM = 3;
    const ITEM = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::QUEST_ID => array(
            'name' => 'quest_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        self::ITEM => array(
            'name' => 'item',
            'repeated' => true,
            'type' => '\PB_Item'
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
        $this->values[self::QUEST_ID] = null;
        $this->values[self::RES_TYPE] = array();
        $this->values[self::RES_NUM] = array();
        $this->values[self::ITEM] = array();
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
     * Sets value of 'quest_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setQuestId($value)
    {
        return $this->set(self::QUEST_ID, $value);
    }

    /**
     * Returns value of 'quest_id' property
     *
     * @return integer
     */
    public function getQuestId()
    {
        $value = $this->get(self::QUEST_ID);
        return $value === null ? (integer)$value : $value;
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

    /**
     * Appends value to 'item' list
     *
     * @param \PB_Item $value Value to append
     *
     * @return null
     */
    public function appendItem(\PB_Item $value)
    {
        return $this->append(self::ITEM, $value);
    }

    /**
     * Clears 'item' list
     *
     * @return null
     */
    public function clearItem()
    {
        return $this->clear(self::ITEM);
    }

    /**
     * Returns 'item' list
     *
     * @return \PB_Item[]
     */
    public function getItem()
    {
        return $this->get(self::ITEM);
    }

    /**
     * Returns 'item' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemIterator()
    {
        return new \ArrayIterator($this->get(self::ITEM));
    }

    /**
     * Returns element from 'item' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Item
     */
    public function getItemAt($offset)
    {
        return $this->get(self::ITEM, $offset);
    }

    /**
     * Returns count of 'item' list
     *
     * @return int
     */
    public function getItemCount()
    {
        return $this->count(self::ITEM);
    }
}
}