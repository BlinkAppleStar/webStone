<?php
/**
 * Auto generated from Map.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_AddFavorite_C2S message
 */
class PB_AddFavorite_C2S extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const FAVORITE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FAVORITE => array(
            'name' => 'favorite',
            'required' => false,
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
        $this->values[self::ID] = null;
        $this->values[self::FAVORITE] = null;
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
     * Sets value of 'favorite' property
     *
     * @param \PB_FavoritePos $value Property value
     *
     * @return null
     */
    public function setFavorite(\PB_FavoritePos $value=null)
    {
        return $this->set(self::FAVORITE, $value);
    }

    /**
     * Returns value of 'favorite' property
     *
     * @return \PB_FavoritePos
     */
    public function getFavorite()
    {
        return $this->get(self::FAVORITE);
    }
}
}