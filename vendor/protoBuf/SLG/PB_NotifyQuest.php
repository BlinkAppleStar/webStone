<?php
/**
 * Auto generated from Quest.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_NotifyQuest message
 */
class PB_NotifyQuest extends \ProtobufMessage
{
    /* Field index constants */
    const QUEST_ID = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::QUEST_ID => array(
            'name' => 'quest_id',
            'required' => false,
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
        $this->values[self::QUEST_ID] = null;
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
}
}