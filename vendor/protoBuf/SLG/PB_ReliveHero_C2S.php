<?php
/**
 * Auto generated from Hero.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ReliveHero_C2S message
 */
class PB_ReliveHero_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const HERO_ID = 2;
    const HP_PERCENT = 3;
    const DIRECT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HERO_ID => array(
            'name' => 'hero_id',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HP_PERCENT => array(
            'name' => 'hp_percent',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::DIRECT => array(
            'name' => 'direct',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::HERO_ID] = array();
        $this->values[self::HP_PERCENT] = array();
        $this->values[self::DIRECT] = null;
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
     * Appends value to 'hero_id' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendHeroId($value)
    {
        return $this->append(self::HERO_ID, $value);
    }

    /**
     * Clears 'hero_id' list
     *
     * @return null
     */
    public function clearHeroId()
    {
        return $this->clear(self::HERO_ID);
    }

    /**
     * Returns 'hero_id' list
     *
     * @return integer[]
     */
    public function getHeroId()
    {
        return $this->get(self::HERO_ID);
    }

    /**
     * Returns 'hero_id' iterator
     *
     * @return \ArrayIterator
     */
    public function getHeroIdIterator()
    {
        return new \ArrayIterator($this->get(self::HERO_ID));
    }

    /**
     * Returns element from 'hero_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getHeroIdAt($offset)
    {
        return $this->get(self::HERO_ID, $offset);
    }

    /**
     * Returns count of 'hero_id' list
     *
     * @return int
     */
    public function getHeroIdCount()
    {
        return $this->count(self::HERO_ID);
    }

    /**
     * Appends value to 'hp_percent' list
     *
     * @param double $value Value to append
     *
     * @return null
     */
    public function appendHpPercent($value)
    {
        return $this->append(self::HP_PERCENT, $value);
    }

    /**
     * Clears 'hp_percent' list
     *
     * @return null
     */
    public function clearHpPercent()
    {
        return $this->clear(self::HP_PERCENT);
    }

    /**
     * Returns 'hp_percent' list
     *
     * @return double[]
     */
    public function getHpPercent()
    {
        return $this->get(self::HP_PERCENT);
    }

    /**
     * Returns 'hp_percent' iterator
     *
     * @return \ArrayIterator
     */
    public function getHpPercentIterator()
    {
        return new \ArrayIterator($this->get(self::HP_PERCENT));
    }

    /**
     * Returns element from 'hp_percent' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return double
     */
    public function getHpPercentAt($offset)
    {
        return $this->get(self::HP_PERCENT, $offset);
    }

    /**
     * Returns count of 'hp_percent' list
     *
     * @return int
     */
    public function getHpPercentCount()
    {
        return $this->count(self::HP_PERCENT);
    }

    /**
     * Sets value of 'direct' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDirect($value)
    {
        return $this->set(self::DIRECT, $value);
    }

    /**
     * Returns value of 'direct' property
     *
     * @return boolean
     */
    public function getDirect()
    {
        $value = $this->get(self::DIRECT);
        return $value === null ? (boolean)$value : $value;
    }
}
}