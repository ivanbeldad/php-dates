<?php

namespace Date;


class Date
{
    const MIN_TIME = -2147483648;
    const MAX_TIME = 2147472000;

    /** @var int */
    private $time;
    /** @var int */
    private $year;
    /** @var int */
    private $month;
    /** @var int */
    private $day;
    /** @var int */
    private $hours;
    /** @var int */
    private $minutes;
    /** @var int */
    private $seconds;
    /** @var int */
    private $wday;
    /** @var int */
    private $monthText;
    /** @var int */
    private $weekText;
    /** @var int */
    private $season;
    /** @var int */
    private $seasonText;

    /**
     * Date constructor.
     * @param int $time
     */
    public function __construct($time = null)
    {
        if ($time === null) $time = time();
        $this->setTime($time);
    }

    /**
     * @param int $year
     * @param int $month
     * @param int $day
     * @param int $hour
     * @param int $minute
     * @param int $second
     * @return Date
     */
    static public function createDate($year, $month, $day, $hour = 0, $minute = 0, $second = 0)
    {
        $time = mktime($hour, $minute, $second, $month, $day, $year);
        return new Date($time);
    }

    /** @return int */
    public function getTime()
    {
        return $this->time;
    }

    /** @param $time */
    public function setTime($time)
    {
        if ($time > self::MAX_TIME) {
            $time = self::MAX_TIME;
        }
        else if ($time < self::MIN_TIME) {
            $time = self::MIN_TIME;
        }
        $this->time = $time;
        $date = getdate($this->time);
        $this->year = $date['year'];
        $this->month = $date['mon'];
        $this->day = $date['mday'];
        $this->hours = $date['hours'];
        $this->minutes = $date['minutes'];
        $this->seconds = $date['seconds'];
        $this->wday = $date['wday'];
        $this->weekText = $date['weekday'];
        $this->monthText = $date['month'];
        $this->updateSeason();
    }

    /** @return int */
    public function getYear()
    {
        return $this->year;
    }

    /** @param int $year */
    public function setYear($year)
    {
        $this->year = $year;
        $this->updateTime();
    }

    /** @return int */
    public function getMonth()
    {
        return $this->month;
    }

    /** @param int $month */
    public function setMonth($month)
    {
        $this->month = $month;
        $this->updateTime();
    }

    /** @return int */
    public function getDay()
    {
        return $this->day;
    }

    /** @param int $day */
    public function setDay($day)
    {
        $this->day = $day;
        $this->updateTime();
    }

    /** @return int */
    public function getHours()
    {
        return $this->hours;
    }

    /** @param int $hours */
    public function setHours($hours)
    {
        $this->hours = $hours;
        $this->updateTime();
    }

    /** @return int */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /** @param int $minutes */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;
        $this->updateTime();
    }

    /** @return int */
    public function getSeconds()
    {
        return $this->seconds;
    }

    /** @param int $seconds */
    public function setSeconds($seconds)
    {
        $this->seconds = $seconds;
        $this->updateTime();
    }

    /** @return int */
    public function getDayOfWeek()
    {
        return $this->wday;
    }

    /** @return string */
    public function getMonthDay()
    {
        return $this->monthText;
    }

    /** @return string */
    public function getWeekDay()
    {
        return $this->weekText;
    }

    /** @return int */
    public function getSeasonNumber()
    {
        return $this->season;
    }

    /** @return string */
    public function getSeason()
    {
        return $this->seasonText;
    }

    /**
     * @param Date $date
     * @return int
     */
    public function numberOfDaysBetween($date)
    {
        $minDate = $this->min($date);
        $maxDate = $this->max($date);
        $numberOfDays = 0;
        while ($minDate->getTime() <= $maxDate->getTime()) {
            ++$numberOfDays;
            $minDate = Date::createDate($minDate->getYear(), $minDate->getMonth(), $minDate->getDay() + 1);
        }
        return $numberOfDays;
    }

    /**
     * @param Date $start
     * @param Date $end
     * @return Date[]
     * @internal param $date
     */
    public static function datesBetween(Date $start, Date $end)
    {
        if ($start->getTime() > $end->getTime()) {
            $minDate = $end;
            $maxDate = $start;
        } else {
            $minDate = $start;
            $maxDate = $end;
        }
        $dates = [];
        while ($minDate->getTime() <= $maxDate->getTime()) {
            array_push($dates, $minDate);
            $minDate = Date::createDate($minDate->getYear(), $minDate->getMonth(), $minDate->getDay() + 1);
        }
        return $dates;
    }

    private function updateTime()
    {
        $this->setTime(mktime($this->hours, $this->minutes, $this->seconds, $this->month, $this->day, $this->year));
    }

    private function updateSeason()
    {
        $startSpring = mktime(0, 0, 0, 3, 21, $this->getYear());
        $endSpring = mktime(0, 0, 0, 6, 20, $this->getYear());
        $startSummer = mktime(0, 0, 0, 6, 21, $this->getYear());
        $endSummer = mktime(0, 0, 0, 9, 22, $this->getYear());
        $startAutumn = mktime(0, 0, 0, 9, 23, $this->getYear());
        $endAutumn = mktime(0, 0, 0, 12, 20, $this->getYear());
        if ($this->getTime() >= $startSpring && $this->getTime() <= $endSpring) {
            $this->season = Season::SPRING;
            $this->seasonText = "Spring";
        } else if ($this->getTime() >= $startSummer && $this->getTime() <= $endSummer) {
            $this->season = Season::SUMMER;
            $this->seasonText = "Summer";
        } else if ($this->getTime() >= $startAutumn && $this->getTime() <= $endAutumn) {
            $this->season = Season::AUTUMN;
            $this->seasonText = "Autumn";
        } else {
            $this->season = Season::WINTER;
            $this->seasonText = "Winter";
        }
    }

}
