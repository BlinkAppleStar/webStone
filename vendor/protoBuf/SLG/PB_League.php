<?php
/**
 * Auto generated from Common.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_League message
 */
class PB_League extends \ProtobufMessage
{
    /* Field index constants */
    const INFO = 1;
    const MEMBERS = 2;
    const EVENTS = 3;
    const TALKS = 4;
    const REQUESTS = 5;
    const HELP_INFOS = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INFO => array(
            'name' => 'info',
            'required' => false,
            'type' => '\PB_LeagueInfo'
        ),
        self::MEMBERS => array(
            'name' => 'members',
            'repeated' => true,
            'type' => '\PB_LeagueMember'
        ),
        self::EVENTS => array(
            'name' => 'events',
            'repeated' => true,
            'type' => '\PB_LeagueSystemEvent'
        ),
        self::TALKS => array(
            'name' => 'talks',
            'repeated' => true,
            'type' => '\PB_LeagueTalk'
        ),
        self::REQUESTS => array(
            'name' => 'requests',
            'repeated' => true,
            'type' => '\PB_LeagueJoinRequest'
        ),
        self::HELP_INFOS => array(
            'name' => 'help_infos',
            'repeated' => true,
            'type' => '\PB_LeagueHelpInfo'
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
        $this->values[self::INFO] = null;
        $this->values[self::MEMBERS] = array();
        $this->values[self::EVENTS] = array();
        $this->values[self::TALKS] = array();
        $this->values[self::REQUESTS] = array();
        $this->values[self::HELP_INFOS] = array();
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
     * Sets value of 'info' property
     *
     * @param \PB_LeagueInfo $value Property value
     *
     * @return null
     */
    public function setInfo(\PB_LeagueInfo $value=null)
    {
        return $this->set(self::INFO, $value);
    }

    /**
     * Returns value of 'info' property
     *
     * @return \PB_LeagueInfo
     */
    public function getInfo()
    {
        return $this->get(self::INFO);
    }

    /**
     * Appends value to 'members' list
     *
     * @param \PB_LeagueMember $value Value to append
     *
     * @return null
     */
    public function appendMembers(\PB_LeagueMember $value)
    {
        return $this->append(self::MEMBERS, $value);
    }

    /**
     * Clears 'members' list
     *
     * @return null
     */
    public function clearMembers()
    {
        return $this->clear(self::MEMBERS);
    }

    /**
     * Returns 'members' list
     *
     * @return \PB_LeagueMember[]
     */
    public function getMembers()
    {
        return $this->get(self::MEMBERS);
    }

    /**
     * Returns 'members' iterator
     *
     * @return \ArrayIterator
     */
    public function getMembersIterator()
    {
        return new \ArrayIterator($this->get(self::MEMBERS));
    }

    /**
     * Returns element from 'members' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_LeagueMember
     */
    public function getMembersAt($offset)
    {
        return $this->get(self::MEMBERS, $offset);
    }

    /**
     * Returns count of 'members' list
     *
     * @return int
     */
    public function getMembersCount()
    {
        return $this->count(self::MEMBERS);
    }

    /**
     * Appends value to 'events' list
     *
     * @param \PB_LeagueSystemEvent $value Value to append
     *
     * @return null
     */
    public function appendEvents(\PB_LeagueSystemEvent $value)
    {
        return $this->append(self::EVENTS, $value);
    }

    /**
     * Clears 'events' list
     *
     * @return null
     */
    public function clearEvents()
    {
        return $this->clear(self::EVENTS);
    }

    /**
     * Returns 'events' list
     *
     * @return \PB_LeagueSystemEvent[]
     */
    public function getEvents()
    {
        return $this->get(self::EVENTS);
    }

    /**
     * Returns 'events' iterator
     *
     * @return \ArrayIterator
     */
    public function getEventsIterator()
    {
        return new \ArrayIterator($this->get(self::EVENTS));
    }

    /**
     * Returns element from 'events' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_LeagueSystemEvent
     */
    public function getEventsAt($offset)
    {
        return $this->get(self::EVENTS, $offset);
    }

    /**
     * Returns count of 'events' list
     *
     * @return int
     */
    public function getEventsCount()
    {
        return $this->count(self::EVENTS);
    }

    /**
     * Appends value to 'talks' list
     *
     * @param \PB_LeagueTalk $value Value to append
     *
     * @return null
     */
    public function appendTalks(\PB_LeagueTalk $value)
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
     * @return \PB_LeagueTalk[]
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
     * @return \PB_LeagueTalk
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
     * Appends value to 'requests' list
     *
     * @param \PB_LeagueJoinRequest $value Value to append
     *
     * @return null
     */
    public function appendRequests(\PB_LeagueJoinRequest $value)
    {
        return $this->append(self::REQUESTS, $value);
    }

    /**
     * Clears 'requests' list
     *
     * @return null
     */
    public function clearRequests()
    {
        return $this->clear(self::REQUESTS);
    }

    /**
     * Returns 'requests' list
     *
     * @return \PB_LeagueJoinRequest[]
     */
    public function getRequests()
    {
        return $this->get(self::REQUESTS);
    }

    /**
     * Returns 'requests' iterator
     *
     * @return \ArrayIterator
     */
    public function getRequestsIterator()
    {
        return new \ArrayIterator($this->get(self::REQUESTS));
    }

    /**
     * Returns element from 'requests' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_LeagueJoinRequest
     */
    public function getRequestsAt($offset)
    {
        return $this->get(self::REQUESTS, $offset);
    }

    /**
     * Returns count of 'requests' list
     *
     * @return int
     */
    public function getRequestsCount()
    {
        return $this->count(self::REQUESTS);
    }

    /**
     * Appends value to 'help_infos' list
     *
     * @param \PB_LeagueHelpInfo $value Value to append
     *
     * @return null
     */
    public function appendHelpInfos(\PB_LeagueHelpInfo $value)
    {
        return $this->append(self::HELP_INFOS, $value);
    }

    /**
     * Clears 'help_infos' list
     *
     * @return null
     */
    public function clearHelpInfos()
    {
        return $this->clear(self::HELP_INFOS);
    }

    /**
     * Returns 'help_infos' list
     *
     * @return \PB_LeagueHelpInfo[]
     */
    public function getHelpInfos()
    {
        return $this->get(self::HELP_INFOS);
    }

    /**
     * Returns 'help_infos' iterator
     *
     * @return \ArrayIterator
     */
    public function getHelpInfosIterator()
    {
        return new \ArrayIterator($this->get(self::HELP_INFOS));
    }

    /**
     * Returns element from 'help_infos' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_LeagueHelpInfo
     */
    public function getHelpInfosAt($offset)
    {
        return $this->get(self::HELP_INFOS, $offset);
    }

    /**
     * Returns count of 'help_infos' list
     *
     * @return int
     */
    public function getHelpInfosCount()
    {
        return $this->count(self::HELP_INFOS);
    }
}
}