<?php

namespace Date;

class Date extends DateObject
{

    /** @const int */
    const MIN_TIME = -2147483648;
    /** @const int */
    const MAX_TIME = 2147472000;

    /**
     * Date constructor.
     */
    public function __construct()
    {
        parent::__construct([]);
        $this->setTime(time());
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
    public static function createDate($year, $month, $day, $hour = 0, $minute = 0, $second = 0)
    {
        $date = new Date();
        $time = mktime($hour, $minute, $second, $month, $day, $year);
        $date->setTime($time);
        return $date;
    }

    /**
     * @return Date
     */
    public static function now()
    {
        $date = new Date();
        $date->setTime(time());
        return $date;
    }

    /**
     * @param int $time
     * @return Date
     */
    public static function createFromTime($time)
    {
        $date = new Date();
        $date->setTime($time);
        return $date;
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
        $this->hour = $date['hours'];
        $this->minute = $date['minutes'];
        $this->second = $date['seconds'];
        $this->dayOfWeek = $date['wday'];
        $this->weekText = $date['weekday'];
        $this->monthText = $date['month'];
        $this->updateSeason();
    }

    /** @param int $year */
    public function setYear($year)
    {
        parent::setYear($year);
        $this->updateTime();
    }

    /** @param int $month */
    public function setMonth($month)
    {
        parent::setMonth($month);
        $this->updateTime();
    }

    /** @param int $day */
    public function setDay($day)
    {
        parent::setDay($day);
        $this->updateTime();
    }

    /** @param int $hours */
    public function setHour($hours)
    {
        parent::setHour($hours);
        $this->updateTime();
    }

    /** @param int $minutes */
    public function setMinute($minutes)
    {
        parent::setMinute($minutes);
        $this->updateTime();
    }

    /** @param int $seconds */
    public function setSecond($seconds)
    {
        parent::setSecond($seconds);
        $this->updateTime();
    }

    /**
     * @param int $dayOfWeek
     */
    public function setDayOfWeek($dayOfWeek)
    {
    }

    /**
     * @param int $monthText
     */
    public function setMonthText($monthText)
    {
    }

    /**
     * @param int $weekText
     */
    public function setWeekText($weekText)
    {
    }

    /**
     * @param int $season
     */
    public function setSeason($season)
    {
    }

    /**
     * @param int $seasonText
     */
    public function setSeasonText($seasonText)
    {
    }

    /**
     * @param Date $date1
     * @param Date $date2
     * @return int
     */
    public static function timeBetween(Date $date1, Date $date2)
    {
        if ($date1->getTime() > $date2->getTime()) {
            $minDate = $date2;
            $maxDate = $date1;
        } else {
            $minDate = $date1;
            $maxDate = $date2;
        }
        return $maxDate->time - $minDate->time;
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
        $this->setTime(mktime($this->hour, $this->minute, $this->second, $this->month, $this->day, $this->year));
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
