<?php

namespace Date;

class DateObject
{

    /** @var int */
    protected $years;
    /** @var int */
    protected $months;
    /** @var int */
    protected $days;
    /** @var int */
    protected $hours;
    /** @var int */
    protected $minutes;
    /** @var int */
    protected $seconds;

    /**
     * DateObject constructor.
     * @param array $values
     */
    public function __construct($values = [])
    {
        if (!(isset($values['years']))) $values['years'] = null;
        if (!(isset($values['months']))) $values['months'] = null;
        if (!(isset($values['days']))) $values['days'] = null;
        if (!(isset($values['hours']))) $values['hours'] = null;
        if (!(isset($values['minutes']))) $values['minutes'] = null;
        if (!(isset($values['seconds']))) $values['seconds'] = null;

        $this->years = $values['years'];
        $this->months = $values['months'];
        $this->days = $values['days'];
        $this->hours = $values['hours'];
        $this->minutes = $values['minutes'];
        $this->seconds = $values['seconds'];
    }

    /**
     * @return int
     */
    public function getYears()
    {
        return $this->years;
    }

    /**
     * @param int $years
     */
    public function setYears($years)
    {
        $this->years = $years;
    }

    /**
     * @return int
     */
    public function getMonths()
    {
        return $this->months;
    }

    /**
     * @param int $months
     */
    public function setMonths($months)
    {
        $this->months = $months;
    }

    /**
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * @param int $days
     */
    public function setDays($days)
    {
        $this->days = $days;
    }

    /**
     * @return int
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * @param int $hours
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    /**
     * @return int
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * @param int $minutes
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;
    }

    /**
     * @return int
     */
    public function getSeconds()
    {
        return $this->seconds;
    }

    /**
     * @param int $seconds
     */
    public function setSeconds($seconds)
    {
        $this->seconds = $seconds;
    }

}
