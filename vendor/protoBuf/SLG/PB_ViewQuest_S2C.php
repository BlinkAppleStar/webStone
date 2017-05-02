<?php
/**
 * Auto generated from Quest.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_ViewQuest_S2C message
 */
class PB_ViewQuest_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const QUEST_AWARD_RECORD = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::QUEST_AWARD_RECORD => array(
            'name' => 'quest_award_record',
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
        $this->values[self::QUEST_AWARD_RECORD] = null;
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
     * Sets value of 'quest_award_record' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setQuestAwardRecord($value)
    {
        return $this->set(self::QUEST_AWARD_RECORD, $value);
    }

    /**
     * Returns value of 'quest_award_record' property
     *
     * @return integer
     */
    public function getQuestAwardRecord()
    {
        $value = $this->get(self::QUEST_AWARD_RECORD);
        return $value === null ? (integer)$value : $value;
    }
}
}