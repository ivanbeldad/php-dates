<?php

namespace Date;

class DateObject
{

    /** @const int */
    const MIN_TIME = -2147483648;
    /** @const int */
    const MAX_TIME = 2147472000;

    /** @var int */
    protected $time;
    /** @var int */
    protected $year;
    /** @var int */
    protected $month;
    /** @var int */
    protected $day;
    /** @var int */
    protected $hour;
    /** @var int */
    protected $minute;
    /** @var int */
    protected $second;
    /** @var int */
    protected $dayOfWeek;
    /** @var int */
    protected $monthText;
    /** @var int */
    protected $weekText;
    /** @var int */
    protected $season;
    /** @var int */
    protected $seasonText;

    /**
     * DateObject constructor.
     * @param array $values
     */
    public function __construct($values = [])
    {
        if (!(isset($values['time']))) $values['time'] = null;
        if (!(isset($values['year']))) $values['year'] = null;
        if (!(isset($values['month']))) $values['month'] = null;
        if (!(isset($values['day']))) $values['day'] = null;
        if (!(isset($values['hour']))) $values['hour'] = null;
        if (!(isset($values['minute']))) $values['minute'] = null;
        if (!(isset($values['second']))) $values['second'] = null;
        if (!(isset($values['wday']))) $values['wday'] = null;
        if (!(isset($values['monthText']))) $values['monthText'] = null;
        if (!(isset($values['weekText']))) $values['weekText'] = null;
        if (!(isset($values['season']))) $values['season'] = null;
        if (!(isset($values['seasonText']))) $values['seasonText'] = null;

        $this->time = $values['time'];
        $this->year = $values['year'];
        $this->month = $values['month'];
        $this->day = $values['day'];
        $this->hour = $values['hour'];
        $this->minute = $values['minute'];
        $this->second = $values['second'];
        $this->dayOfWeek = $values['wday'];
        $this->monthText = $values['monthText'];
        $this->weekText = $values['weekText'];
        $this->season = $values['season'];
        $this->seasonText = $values['seasonText'];
    }

    /**
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param int $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return int
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @param int $month
     */
    public function setMonth($month)
    {
        $this->month = $month;
    }

    /**
     * @return int
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param int $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * @return int
     */
    public function getHour()
    {
        return $this->hour;
    }

    /**
     * @param int $hour
     */
    public function setHour($hour)
    {
        $this->hour = $hour;
    }

    /**
     * @return int
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * @param int $minute
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;
    }

    /**
     * @return int
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * @param int $second
     */
    public function setSecond($second)
    {
        $this->second = $second;
    }

    /**
     * @return int
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @param $dayOfWeek
     * @internal param int $wday
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;
    }

    /**
     * @return int
     */
    public function getMonthText()
    {
        return $this->monthText;
    }

    /**
     * @param int $monthText
     */
    public function setMonthText($monthText)
    {
        $this->monthText = $monthText;
    }

    /**
     * @return int
     */
    public function getWeekText()
    {
        return $this->weekText;
    }

    /**
     * @param int $weekText
     */
    public function setWeekText($weekText)
    {
        $this->weekText = $weekText;
    }

    /**
     * @return int
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param int $season
     */
    public function setSeason($season)
    {
        $this->season = $season;
    }

    /**
     * @return int
     */
    public function getSeasonText()
    {
        return $this->seasonText;
    }

    /**
     * @param int $seasonText
     */
    public function setSeasonText($seasonText)
    {
        $this->seasonText = $seasonText;
    }

}
