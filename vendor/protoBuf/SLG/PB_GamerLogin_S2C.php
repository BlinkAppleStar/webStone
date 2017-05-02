<?php
/**
 * Auto generated from Gamer.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerLogin_S2C message
 */
class PB_GamerLogin_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const MAIN = 1;
    const RECONN = 2;
    const SOLDIER = 3;
    const BUILD = 4;
    const TIME = 5;
    const FRIREQ = 6;
    const CARD = 7;
    const CARDGROUP = 8;
    const LEAGUE = 9;
    const MAIL = 10;
    const ITEM = 11;
    const TECH = 12;
    const TALKS = 13;
    const COMBAT = 14;
    const TIME_EFFECT_LIST = 15;
    const CUR_QUEST = 16;
    const CUR_TAKE_QUEST_AWARD = 17;
    const ASSEMBLE_MONSTER = 18;
    const LEAGUE_WAR = 19;
    const ASSIST_ARMY = 20;
    const ENEMY_ARMY = 21;
    const ASSIST_ARRIVE_TIME = 22;
    const ENEMY_ARRIVE_TIME = 23;
    const CAN_TAKE_LOGIN_AWARD = 24;
    const LEAGUE_LEADER_POS = 25;
    const LEAGUE_MEMBER_POS = 26;
    const HERO = 27;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MAIN => array(
            'name' => 'main',
            'required' => false,
            'type' => '\PB_Gamer'
        ),
        self::RECONN => array(
            'name' => 'reconn',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SOLDIER => array(
            'name' => 'soldier',
            'repeated' => true,
            'type' => '\PB_Soldier'
        ),
        self::BUILD => array(
            'name' => 'build',
            'repeated' => true,
            'type' => '\PB_Build'
        ),
        self::TIME => array(
            'name' => 'time',
            'required' => false,
            'type' => '\PB_ServerTime'
        ),
        self::FRIREQ => array(
            'name' => 'frireq',
            'repeated' => true,
            'type' => '\PB_GamerAddFriend_C2S'
        ),
        self::CARD => array(
            'name' => 'card',
            'repeated' => true,
            'type' => '\PB_Card'
        ),
        self::CARDGROUP => array(
            'name' => 'cardgroup',
            'repeated' => true,
            'type' => '\PB_CardGroup'
        ),
        self::LEAGUE => array(
            'name' => 'league',
            'required' => false,
            'type' => '\PB_League'
        ),
        self::MAIL => array(
            'name' => 'mail',
            'repeated' => true,
            'type' => '\PB_Mail'
        ),
        self::ITEM => array(
            'name' => 'item',
            'repeated' => true,
            'type' => '\PB_Item'
        ),
        self::TECH => array(
            'name' => 'tech',
            'repeated' => true,
            'type' => '\PB_Tech'
        ),
        self::TALKS => array(
            'name' => 'talks',
            'repeated' => true,
            'type' => '\PB_PersonalTalk'
        ),
        self::COMBAT => array(
            'name' => 'combat',
            'repeated' => true,
            'type' => '\PB_Combat'
        ),
        self::TIME_EFFECT_LIST => array(
            'name' => 'time_effect_list',
            'repeated' => true,
            'type' => '\PB_TimeEffectList'
        ),
        self::CUR_QUEST => array(
            'name' => 'cur_quest',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CUR_TAKE_QUEST_AWARD => array(
            'name' => 'cur_take_quest_award',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASSEMBLE_MONSTER => array(
            'name' => 'assemble_monster',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEAGUE_WAR => array(
            'name' => 'league_war',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASSIST_ARMY => array(
            'name' => 'assist_army',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENEMY_ARMY => array(
            'name' => 'enemy_army',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ASSIST_ARRIVE_TIME => array(
            'name' => 'assist_arrive_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENEMY_ARRIVE_TIME => array(
            'name' => 'enemy_arrive_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CAN_TAKE_LOGIN_AWARD => array(
            'name' => 'can_take_login_award',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LEAGUE_LEADER_POS => array(
            'name' => 'league_leader_pos',
            'required' => false,
            'type' => '\PB_Vec2'
        ),
        self::LEAGUE_MEMBER_POS => array(
            'name' => 'league_member_pos',
            'repeated' => true,
            'type' => '\PB_Vec2'
        ),
        self::HERO => array(
            'name' => 'hero',
            'repeated' => true,
            'type' => '\PB_Hero'
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
        $this->values[self::MAIN] = null;
        $this->values[self::RECONN] = null;
        $this->values[self::SOLDIER] = array();
        $this->values[self::BUILD] = array();
        $this->values[self::TIME] = null;
        $this->values[self::FRIREQ] = array();
        $this->values[self::CARD] = array();
        $this->values[self::CARDGROUP] = array();
        $this->values[self::LEAGUE] = null;
        $this->values[self::MAIL] = array();
        $this->values[self::ITEM] = array();
        $this->values[self::TECH] = array();
        $this->values[self::TALKS] = array();
        $this->values[self::COMBAT] = array();
        $this->values[self::TIME_EFFECT_LIST] = array();
        $this->values[self::CUR_QUEST] = null;
        $this->values[self::CUR_TAKE_QUEST_AWARD] = null;
        $this->values[self::ASSEMBLE_MONSTER] = null;
        $this->values[self::LEAGUE_WAR] = null;
        $this->values[self::ASSIST_ARMY] = null;
        $this->values[self::ENEMY_ARMY] = null;
        $this->values[self::ASSIST_ARRIVE_TIME] = null;
        $this->values[self::ENEMY_ARRIVE_TIME] = null;
        $this->values[self::CAN_TAKE_LOGIN_AWARD] = null;
        $this->values[self::LEAGUE_LEADER_POS] = null;
        $this->values[self::LEAGUE_MEMBER_POS] = array();
        $this->values[self::HERO] = array();
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

    /**
     * Sets value of 'reconn' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReconn($value)
    {
        return $this->set(self::RECONN, $value);
    }

    /**
     * Returns value of 'reconn' property
     *
     * @return string
     */
    public function getReconn()
    {
        $value = $this->get(self::RECONN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'soldier' list
     *
     * @param \PB_Soldier $value Value to append
     *
     * @return null
     */
    public function appendSoldier(\PB_Soldier $value)
    {
        return $this->append(self::SOLDIER, $value);
    }

    /**
     * Clears 'soldier' list
     *
     * @return null
     */
    public function clearSoldier()
    {
        return $this->clear(self::SOLDIER);
    }

    /**
     * Returns 'soldier' list
     *
     * @return \PB_Soldier[]
     */
    public function getSoldier()
    {
        return $this->get(self::SOLDIER);
    }

    /**
     * Returns 'soldier' iterator
     *
     * @return \ArrayIterator
     */
    public function getSoldierIterator()
    {
        return new \ArrayIterator($this->get(self::SOLDIER));
    }

    /**
     * Returns element from 'soldier' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Soldier
     */
    public function getSoldierAt($offset)
    {
        return $this->get(self::SOLDIER, $offset);
    }

    /**
     * Returns count of 'soldier' list
     *
     * @return int
     */
    public function getSoldierCount()
    {
        return $this->count(self::SOLDIER);
    }

    /**
     * Appends value to 'build' list
     *
     * @param \PB_Build $value Value to append
     *
     * @return null
     */
    public function appendBuild(\PB_Build $value)
    {
        return $this->append(self::BUILD, $value);
    }

    /**
     * Clears 'build' list
     *
     * @return null
     */
    public function clearBuild()
    {
        return $this->clear(self::BUILD);
    }

    /**
     * Returns 'build' list
     *
     * @return \PB_Build[]
     */
    public function getBuild()
    {
        return $this->get(self::BUILD);
    }

    /**
     * Returns 'build' iterator
     *
     * @return \ArrayIterator
     */
    public function getBuildIterator()
    {
        return new \ArrayIterator($this->get(self::BUILD));
    }

    /**
     * Returns element from 'build' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Build
     */
    public function getBuildAt($offset)
    {
        return $this->get(self::BUILD, $offset);
    }

    /**
     * Returns count of 'build' list
     *
     * @return int
     */
    public function getBuildCount()
    {
        return $this->count(self::BUILD);
    }

    /**
     * Sets value of 'time' property
     *
     * @param \PB_ServerTime $value Property value
     *
     * @return null
     */
    public function setTime(\PB_ServerTime $value=null)
    {
        return $this->set(self::TIME, $value);
    }

    /**
     * Returns value of 'time' property
     *
     * @return \PB_ServerTime
     */
    public function getTime()
    {
        return $this->get(self::TIME);
    }

    /**
     * Appends value to 'frireq' list
     *
     * @param \PB_GamerAddFriend_C2S $value Value to append
     *
     * @return null
     */
    public function appendFrireq(\PB_GamerAddFriend_C2S $value)
    {
        return $this->append(self::FRIREQ, $value);
    }

    /**
     * Clears 'frireq' list
     *
     * @return null
     */
    public function clearFrireq()
    {
        return $this->clear(self::FRIREQ);
    }

    /**
     * Returns 'frireq' list
     *
     * @return \PB_GamerAddFriend_C2S[]
     */
    public function getFrireq()
    {
        return $this->get(self::FRIREQ);
    }

    /**
     * Returns 'frireq' iterator
     *
     * @return \ArrayIterator
     */
    public function getFrireqIterator()
    {
        return new \ArrayIterator($this->get(self::FRIREQ));
    }

    /**
     * Returns element from 'frireq' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_GamerAddFriend_C2S
     */
    public function getFrireqAt($offset)
    {
        return $this->get(self::FRIREQ, $offset);
    }

    /**
     * Returns count of 'frireq' list
     *
     * @return int
     */
    public function getFrireqCount()
    {
        return $this->count(self::FRIREQ);
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
     * Appends value to 'cardgroup' list
     *
     * @param \PB_CardGroup $value Value to append
     *
     * @return null
     */
    public function appendCardgroup(\PB_CardGroup $value)
    {
        return $this->append(self::CARDGROUP, $value);
    }

    /**
     * Clears 'cardgroup' list
     *
     * @return null
     */
    public function clearCardgroup()
    {
        return $this->clear(self::CARDGROUP);
    }

    /**
     * Returns 'cardgroup' list
     *
     * @return \PB_CardGroup[]
     */
    public function getCardgroup()
    {
        return $this->get(self::CARDGROUP);
    }

    /**
     * Returns 'cardgroup' iterator
     *
     * @return \ArrayIterator
     */
    public function getCardgroupIterator()
    {
        return new \ArrayIterator($this->get(self::CARDGROUP));
    }

    /**
     * Returns element from 'cardgroup' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_CardGroup
     */
    public function getCardgroupAt($offset)
    {
        return $this->get(self::CARDGROUP, $offset);
    }

    /**
     * Returns count of 'cardgroup' list
     *
     * @return int
     */
    public function getCardgroupCount()
    {
        return $this->count(self::CARDGROUP);
    }

    /**
     * Sets value of 'league' property
     *
     * @param \PB_League $value Property value
     *
     * @return null
     */
    public function setLeague(\PB_League $value=null)
    {
        return $this->set(self::LEAGUE, $value);
    }

    /**
     * Returns value of 'league' property
     *
     * @return \PB_League
     */
    public function getLeague()
    {
        return $this->get(self::LEAGUE);
    }

    /**
     * Appends value to 'mail' list
     *
     * @param \PB_Mail $value Value to append
     *
     * @return null
     */
    public function appendMail(\PB_Mail $value)
    {
        return $this->append(self::MAIL, $value);
    }

    /**
     * Clears 'mail' list
     *
     * @return null
     */
    public function clearMail()
    {
        return $this->clear(self::MAIL);
    }

    /**
     * Returns 'mail' list
     *
     * @return \PB_Mail[]
     */
    public function getMail()
    {
        return $this->get(self::MAIL);
    }

    /**
     * Returns 'mail' iterator
     *
     * @return \ArrayIterator
     */
    public function getMailIterator()
    {
        return new \ArrayIterator($this->get(self::MAIL));
    }

    /**
     * Returns element from 'mail' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Mail
     */
    public function getMailAt($offset)
    {
        return $this->get(self::MAIL, $offset);
    }

    /**
     * Returns count of 'mail' list
     *
     * @return int
     */
    public function getMailCount()
    {
        return $this->count(self::MAIL);
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

    /**
     * Appends value to 'tech' list
     *
     * @param \PB_Tech $value Value to append
     *
     * @return null
     */
    public function appendTech(\PB_Tech $value)
    {
        return $this->append(self::TECH, $value);
    }

    /**
     * Clears 'tech' list
     *
     * @return null
     */
    public function clearTech()
    {
        return $this->clear(self::TECH);
    }

    /**
     * Returns 'tech' list
     *
     * @return \PB_Tech[]
     */
    public function getTech()
    {
        return $this->get(self::TECH);
    }

    /**
     * Returns 'tech' iterator
     *
     * @return \ArrayIterator
     */
    public function getTechIterator()
    {
        return new \ArrayIterator($this->get(self::TECH));
    }

    /**
     * Returns element from 'tech' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Tech
     */
    public function getTechAt($offset)
    {
        return $this->get(self::TECH, $offset);
    }

    /**
     * Returns count of 'tech' list
     *
     * @return int
     */
    public function getTechCount()
    {
        return $this->count(self::TECH);
    }

    /**
     * Appends value to 'talks' list
     *
     * @param \PB_PersonalTalk $value Value to append
     *
     * @return null
     */
    public function appendTalks(\PB_PersonalTalk $value)
    {
        return $this->append(self::TALKS, $value);
    }

    /**
     * Clears 'talks' list
     *
     * @return null
     */
    public function clearTalks()
    {
        return $this->clear(self::TALKS);
    }

    /**
     * Returns 'talks' list
     *
     * @return \PB_PersonalTalk[]
     */
    public function getTalks()
    {
        return $this->get(self::TALKS);
    }

    /**
     * Returns 'talks' iterator
     *
     * @return \ArrayIterator
     */
    public function getTalksIterator()
    {
        return new \ArrayIterator($this->get(self::TALKS));
    }

    /**
     * Returns element from 'talks' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_PersonalTalk
     */
    public function getTalksAt($offset)
    {
        return $this->get(self::TALKS, $offset);
    }

    /**
     * Returns count of 'talks' list
     *
     * @return int
     */
    public function getTalksCount()
    {
        return $this->count(self::TALKS);
    }

    /**
     * Appends value to 'combat' list
     *
     * @param \PB_Combat $value Value to append
     *
     * @return null
     */
    public function appendCombat(\PB_Combat $value)
    {
        return $this->append(self::COMBAT, $value);
    }

    /**
     * Clears 'combat' list
     *
     * @return null
     */
    public function clearCombat()
    {
        return $this->clear(self::COMBAT);
    }

    /**
     * Returns 'combat' list
     *
     * @return \PB_Combat[]
     */
    public function getCombat()
    {
        return $this->get(self::COMBAT);
    }

    /**
     * Returns 'combat' iterator
     *
     * @return \ArrayIterator
     */
    public function getCombatIterator()
    {
        return new \ArrayIterator($this->get(self::COMBAT));
    }

    /**
     * Returns element from 'combat' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Combat
     */
    public function getCombatAt($offset)
    {
        return $this->get(self::COMBAT, $offset);
    }

    /**
     * Returns count of 'combat' list
     *
     * @return int
     */
    public function getCombatCount()
    {
        return $this->count(self::COMBAT);
    }

    /**
     * Appends value to 'time_effect_list' list
     *
     * @param \PB_TimeEffectList $value Value to append
     *
     * @return null
     */
    public function appendTimeEffectList(\PB_TimeEffectList $value)
    {
        return $this->append(self::TIME_EFFECT_LIST, $value);
    }

    /**
     * Clears 'time_effect_list' list
     *
     * @return null
     */
    public function clearTimeEffectList()
    {
        return $this->clear(self::TIME_EFFECT_LIST);
    }

    /**
     * Returns 'time_effect_list' list
     *
     * @return \PB_TimeEffectList[]
     */
    public function getTimeEffectList()
    {
        return $this->get(self::TIME_EFFECT_LIST);
    }

    /**
     * Returns 'time_effect_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getTimeEffectListIterator()
    {
        return new \ArrayIterator($this->get(self::TIME_EFFECT_LIST));
    }

    /**
     * Returns element from 'time_effect_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_TimeEffectList
     */
    public function getTimeEffectListAt($offset)
    {
        return $this->get(self::TIME_EFFECT_LIST, $offset);
    }

    /**
     * Returns count of 'time_effect_list' list
     *
     * @return int
     */
    public function getTimeEffectListCount()
    {
        return $this->count(self::TIME_EFFECT_LIST);
    }

    /**
     * Sets value of 'cur_quest' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurQuest($value)
    {
        return $this->set(self::CUR_QUEST, $value);
    }

    /**
     * Returns value of 'cur_quest' property
     *
     * @return integer
     */
    public function getCurQuest()
    {
        $value = $this->get(self::CUR_QUEST);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'cur_take_quest_award' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurTakeQuestAward($value)
    {
        return $this->set(self::CUR_TAKE_QUEST_AWARD, $value);
    }

    /**
     * Returns value of 'cur_take_quest_award' property
     *
     * @return integer
     */
    public function getCurTakeQuestAward()
    {
        $value = $this->get(self::CUR_TAKE_QUEST_AWARD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'assemble_monster' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAssembleMonster($value)
    {
        return $this->set(self::ASSEMBLE_MONSTER, $value);
    }

    /**
     * Returns value of 'assemble_monster' property
     *
     * @return integer
     */
    public function getAssembleMonster()
    {
        $value = $this->get(self::ASSEMBLE_MONSTER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'league_war' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLeagueWar($value)
    {
        return $this->set(self::LEAGUE_WAR, $value);
    }

    /**
     * Returns value of 'league_war' property
     *
     * @return integer
     */
    public function getLeagueWar()
    {
        $value = $this->get(self::LEAGUE_WAR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'assist_army' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAssistArmy($value)
    {
        return $this->set(self::ASSIST_ARMY, $value);
    }

    /**
     * Returns value of 'assist_army' property
     *
     * @return integer
     */
    public function getAssistArmy()
    {
        $value = $this->get(self::ASSIST_ARMY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'enemy_army' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEnemyArmy($value)
    {
        return $this->set(self::ENEMY_ARMY, $value);
    }

    /**
     * Returns value of 'enemy_army' property
     *
     * @return integer
     */
    public function getEnemyArmy()
    {
        $value = $this->get(self::ENEMY_ARMY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'assist_arrive_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAssistArriveTime($value)
    {
        return $this->set(self::ASSIST_ARRIVE_TIME, $value);
    }

    /**
     * Returns value of 'assist_arrive_time' property
     *
     * @return integer
     */
    public function getAssistArriveTime()
    {
        $value = $this->get(self::ASSIST_ARRIVE_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'enemy_arrive_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEnemyArriveTime($value)
    {
        return $this->set(self::ENEMY_ARRIVE_TIME, $value);
    }

    /**
     * Returns value of 'enemy_arrive_time' property
     *
     * @return integer
     */
    public function getEnemyArriveTime()
    {
        $value = $this->get(self::ENEMY_ARRIVE_TIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'can_take_login_award' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCanTakeLoginAward($value)
    {
        return $this->set(self::CAN_TAKE_LOGIN_AWARD, $value);
    }

    /**
     * Returns value of 'can_take_login_award' property
     *
     * @return integer
     */
    public function getCanTakeLoginAward()
    {
        $value = $this->get(self::CAN_TAKE_LOGIN_AWARD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'league_leader_pos' property
     *
     * @param \PB_Vec2 $value Property value
     *
     * @return null
     */
    public function setLeagueLeaderPos(\PB_Vec2 $value=null)
    {
        return $this->set(self::LEAGUE_LEADER_POS, $value);
    }

    /**
     * Returns value of 'league_leader_pos' property
     *
     * @return \PB_Vec2
     */
    public function getLeagueLeaderPos()
    {
        return $this->get(self::LEAGUE_LEADER_POS);
    }

    /**
     * Appends value to 'league_member_pos' list
     *
     * @param \PB_Vec2 $value Value to append
     *
     * @return null
     */
    public function appendLeagueMemberPos(\PB_Vec2 $value)
    {
        return $this->append(self::LEAGUE_MEMBER_POS, $value);
    }

    /**
     * Clears 'league_member_pos' list
     *
     * @return null
     */
    public function clearLeagueMemberPos()
    {
        return $this->clear(self::LEAGUE_MEMBER_POS);
    }

    /**
     * Returns 'league_member_pos' list
     *
     * @return \PB_Vec2[]
     */
    public function getLeagueMemberPos()
    {
        return $this->get(self::LEAGUE_MEMBER_POS);
    }

    /**
     * Returns 'league_member_pos' iterator
     *
     * @return \ArrayIterator
     */
    public function getLeagueMemberPosIterator()
    {
        return new \ArrayIterator($this->get(self::LEAGUE_MEMBER_POS));
    }

    /**
     * Returns element from 'league_member_pos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Vec2
     */
    public function getLeagueMemberPosAt($offset)
    {
        return $this->get(self::LEAGUE_MEMBER_POS, $offset);
    }

    /**
     * Returns count of 'league_member_pos' list
     *
     * @return int
     */
    public function getLeagueMemberPosCount()
    {
        return $this->count(self::LEAGUE_MEMBER_POS);
    }

    /**
     * Appends value to 'hero' list
     *
     * @param \PB_Hero $value Value to append
     *
     * @return null
     */
    public function appendHero(\PB_Hero $value)
    {
        return $this->append(self::HERO, $value);
    }

    /**
     * Clears 'hero' list
     *
     * @return null
     */
    public function clearHero()
    {
        return $this->clear(self::HERO);
    }

    /**
     * Returns 'hero' list
     *
     * @return \PB_Hero[]
     */
    public function getHero()
    {
        return $this->get(self::HERO);
    }

    /**
     * Returns 'hero' iterator
     *
     * @return \ArrayIterator
     */
    public function getHeroIterator()
    {
        return new \ArrayIterator($this->get(self::HERO));
    }

    /**
     * Returns element from 'hero' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Hero
     */
    public function getHeroAt($offset)
    {
        return $this->get(self::HERO, $offset);
    }

    /**
     * Returns count of 'hero' list
     *
     * @return int
     */
    public function getHeroCount()
    {
        return $this->count(self::HERO);
    }
}
}