<?php
/**
 * Auto generated from League.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_LeagueHelpOthers_C2S message
 */
class PB_LeagueHelpOthers_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const INFO_IDS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INFO_IDS => array(
            'name' => 'info_ids',
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
        $this->values[self::ID] = null;
        $this->values[self::INFO_IDS] = array();
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
     * Appends value to 'info_ids' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendInfoIds($value)
    {
        return $this->append(self::INFO_IDS, $value);
    }

    /**
     * Clears 'info_ids' list
     *
     * @return null
     */
    public function clearInfoIds()
    {
        return $this->clear(self::INFO_IDS);
    }

    /**
     * Returns 'info_ids' list
     *
     * @return integer[]
     */
    public function getInfoIds()
    {
        return $this->get(self::INFO_IDS);
    }

    /**
     * Returns 'info_ids' iterator
     *
     * @return \ArrayIterator
     */
    public function getInfoIdsIterator()
    {
        return new \ArrayIterator($this->get(self::INFO_IDS));
    }

    /**
     * Returns element from 'info_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getInfoIdsAt($offset)
    {
        return $this->get(self::INFO_IDS, $offset);
    }

    /**
     * Returns count of 'info_ids' list
     *
     * @return int
     */
    public function getInfoIdsCount()
    {
        return $this->count(self::INFO_IDS);
    }
}
}