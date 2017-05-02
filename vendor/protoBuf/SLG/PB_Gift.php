<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_Gift message
 */
class PB_Gift extends \ProtobufMessage
{
    /* Field index constants */
    const CARD = 1;
    const MAIN = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CARD => array(
            'name' => 'card',
            'repeated' => true,
            'type' => '\PB_Card'
        ),
        self::MAIN => array(
            'name' => 'main',
            'required' => false,
            'type' => '\PB_Gamer'
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
        $this->values[self::CARD] = array();
        $this->values[self::MAIN] = null;
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
     * Appends value to 'card' list
     *
     * @param \PB_Card $value Value to append
     *
     * @return null
     */
    public function appendCard(\PB_Card $value)
    {
        return $this->append(self::CARD, $value);
    }

    /**
     * Clears 'card' list
     *
     * @return null
     */
    public function clearCard()
    {
        return $this->clear(self::CARD);
    }

    /**
     * Returns 'card' list
     *
     * @return \PB_Card[]
     */
    public function getCard()
    {
        return $this->get(self::CARD);
    }

    /**
     * Returns 'card' iterator
     *
     * @return \ArrayIterator
     */
    public function getCardIterator()
    {
        return new \ArrayIterator($this->get(self::CARD));
    }

    /**
     * Returns element from 'card' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Card
     */
    public function getCardAt($offset)
    {
        return $this->get(self::CARD, $offset);
    }

    /**
     * Returns count of 'card' list
     *
     * @return int
     */
    public function getCardCount()
    {
        return $this->count(self::CARD);
    }

    /**
     * Sets value of 'main' property
     *
     * @param \PB_Gamer $value Property value
     *
     * @return null
     */
    public function setMain(\PB_Gamer $value=null)
    {
        return $this->set(self::MAIN, $value);
    }

    /**
     * Returns value of 'main' property
     *
     * @return \PB_Gamer
     */
    public function getMain()
    {
        return $this->get(self::MAIN);
    }
}
}