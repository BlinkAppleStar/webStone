<?php
/**
 * Auto generated from Map.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ViewFavorite_S2C message
 */
class PB_ViewFavorite_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const GAMER_ID = 1;
    const FAVORITES = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GAMER_ID => array(
            'name' => 'gamer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FAVORITES => array(
            'name' => 'favorites',
            'repeated' => true,
            'type' => '\PB_FavoritePos'
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
        $this->values[self::GAMER_ID] = null;
        $this->values[self::FAVORITES] = array();
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
     * Sets value of 'gamer_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGamerId($value)
    {
        return $this->set(self::GAMER_ID, $value);
    }

    /**
     * Returns value of 'gamer_id' property
     *
     * @return integer
     */
    public function getGamerId()
    {
        $value = $this->get(self::GAMER_ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'favorites' list
     *
     * @param \PB_FavoritePos $value Value to append
     *
     * @return null
     */
    public function appendFavorites(\PB_FavoritePos $value)
    {
        return $this->append(self::FAVORITES, $value);
    }

    /**
     * Clears 'favorites' list
     *
     * @return null
     */
    public function clearFavorites()
    {
        return $this->clear(self::FAVORITES);
    }

    /**
     * Returns 'favorites' list
     *
     * @return \PB_FavoritePos[]
     */
    public function getFavorites()
    {
        return $this->get(self::FAVORITES);
    }

    /**
     * Returns 'favorites' iterator
     *
     * @return \ArrayIterator
     */
    public function getFavoritesIterator()
    {
        return new \ArrayIterator($this->get(self::FAVORITES));
    }

    /**
     * Returns element from 'favorites' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_FavoritePos
     */
    public function getFavoritesAt($offset)
    {
        return $this->get(self::FAVORITES, $offset);
    }

    /**
     * Returns count of 'favorites' list
     *
     * @return int
     */
    public function getFavoritesCount()
    {
        return $this->count(self::FAVORITES);
    }
}
}