<?php
/**
 * Auto generated from GamerAchieve.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetAchieve_S2C message
 */
class PB_GamerGetAchieve_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const SCORE = 1;
    const ACHIEVES = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SCORE => array(
            'name' => 'score',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ACHIEVES => array(
            'name' => 'achieves',
            'repeated' => true,
            'type' => '\PB_Achieve'
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
        $this->values[self::SCORE] = null;
        $this->values[self::ACHIEVES] = array();
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
     * Sets value of 'score' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScore($value)
    {
        return $this->set(self::SCORE, $value);
    }

    /**
     * Returns value of 'score' property
     *
     * @return integer
     */
    public function getScore()
    {
        $value = $this->get(self::SCORE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'achieves' list
     *
     * @param \PB_Achieve $value Value to append
     *
     * @return null
     */
    public function appendAchieves(\PB_Achieve $value)
    {
        return $this->append(self::ACHIEVES, $value);
    }

    /**
     * Clears 'achieves' list
     *
     * @return null
     */
    public function clearAchieves()
    {
        return $this->clear(self::ACHIEVES);
    }

    /**
     * Returns 'achieves' list
     *
     * @return \PB_Achieve[]
     */
    public function getAchieves()
    {
        return $this->get(self::ACHIEVES);
    }

    /**
     * Returns 'achieves' iterator
     *
     * @return \ArrayIterator
     */
    public function getAchievesIterator()
    {
        return new \ArrayIterator($this->get(self::ACHIEVES));
    }

    /**
     * Returns element from 'achieves' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Achieve
     */
    public function getAchievesAt($offset)
    {
        return $this->get(self::ACHIEVES, $offset);
    }

    /**
     * Returns count of 'achieves' list
     *
     * @return int
     */
    public function getAchievesCount()
    {
        return $this->count(self::ACHIEVES);
    }
}
}