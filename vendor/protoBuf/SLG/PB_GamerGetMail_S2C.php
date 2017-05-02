<?php
/**
 * Auto generated from Mail.proto at 2016-12-05 10:43:26
 */

namespace {
/**
 * PB_GamerGetMail_S2C message
 */
class PB_GamerGetMail_S2C extends \ProtobufMessage
{
    /* Field index constants */
    const TALKS = 1;
    const MAILS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TALKS => array(
            'name' => 'talks',
            'repeated' => true,
            'type' => '\PB_PersonalTalk'
        ),
        self::MAILS => array(
            'name' => 'mails',
            'repeated' => true,
            'type' => '\PB_Mail'
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
        $this->values[self::TALKS] = array();
        $this->values[self::MAILS] = array();
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
     * Appends value to 'mails' list
     *
     * @param \PB_Mail $value Value to append
     *
     * @return null
     */
    public function appendMails(\PB_Mail $value)
    {
        return $this->append(self::MAILS, $value);
    }

    /**
     * Clears 'mails' list
     *
     * @return null
     */
    public function clearMails()
    {
        return $this->clear(self::MAILS);
    }

    /**
     * Returns 'mails' list
     *
     * @return \PB_Mail[]
     */
    public function getMails()
    {
        return $this->get(self::MAILS);
    }

    /**
     * Returns 'mails' iterator
     *
     * @return \ArrayIterator
     */
    public function getMailsIterator()
    {
        return new \ArrayIterator($this->get(self::MAILS));
    }

    /**
     * Returns element from 'mails' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \PB_Mail
     */
    public function getMailsAt($offset)
    {
        return $this->get(self::MAILS, $offset);
    }

    /**
     * Returns count of 'mails' list
     *
     * @return int
     */
    public function getMailsCount()
    {
        return $this->count(self::MAILS);
    }
}
}