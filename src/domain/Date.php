<?php

namespace Time;

use Collection\Equality;
use JsonSerializable;

/**
 * Class Date
 * @package Time
 */
class Date implements Equality, TimeUpdatable, JsonSerializable
{

    /** @const int */
    const MIN_TIME = -2147483648;
    /** @const int */
    const MAX_TIME = 2147472000;

    /** @var int */
    protected $unixTime;
    /** @var int */
    protected $year;
    /** @var Month */
    protected $month;
    /** @var int */
    protected $day;
    /** @var DayOfWeek */
    protected $dayOfWeek;
    /** @var Season */
    protected $season;

    /**
     * Date constructor.
     * @param $time
     */
    protected function __construct($time = 0)
    {
        $this->month = new Month();
        $this->dayOfWeek = new DayOfWeek();
        $this->season = new Season();
        $this->setUnixTime($time);
    }

    /**
     * @return Date
     */
    public static function now()
    {
        return new Date(time());
    }

    /**
     * @param int $time
     * @return Date
     */
    public static function fromUnixTime($time = 0)
    {
        return new Date($time);
    }

    /**
     * @param int $year
     * @param int $month
     * @param int $day
     * @return Date
     */
    public static function create($year = 1970, $month = Month::JANUARY, $day = 1)
    {
        $date = new Date();
        $date->setYear($year);
        $date->setMonth($month);
        $date->setDay($day);
        return $date;
    }

    /**
     * @return int
     */
    public function getUnixTime()
    {
        return $this->unixTime;
    }

    /**
     * @param int $unixTime
     */
    public function setUnixTime($unixTime)
    {
        $this->unixTime = $unixTime;
        $this->updateFromUnixTime($unixTime);
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
        $this->updateFields();
    }

    /**
     * @return Month
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
        $this->month->setNumber($month);
        $this->updateFields();
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
        $this->updateFields();
    }

    /**
     * @return DayOfWeek
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @return Season
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @return bool
     */
    public function isLeapYear()
    {
        $tmp = Date::fromUnixTime($this->unixTime);
        $tmp->setMonth(Month::FEBRUARY);
        $tmp->setDay(29);
        return $tmp->getMonth()->getNumber() === Month::FEBRUARY;
    }

    /**
     * @param Date $object
     * @return boolean
     */
    public function equals($object)
    {
        return $this->unixTime === $object->unixTime;
    }

    /**
     * @param int $time
     * @return void
     */
    public function updateFromUnixTime($time)
    {
        if ($time > self::MAX_TIME) {
            $time = self::MAX_TIME;
        }
        else if ($time < self::MIN_TIME) {
            $time = self::MIN_TIME;
        }
        $this->unixTime = $time;
        $date = getdate($this->unixTime);
        $this->year = $date['year'];
        $this->month->updateFromUnixTime($time);
        $this->day = $date['mday'];
        $this->dayOfWeek->updateFromUnixTime($time);
        $this->season->updateFromUnixTime($time);
    }

    /**
     *
     */
    private function updateFields()
    {
        $this->setUnixTime(mktime(0, 0, 0, $this->month->getNumber(), $this->day, $this->year));
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [
            "year" => $this->year,
            "month" => [
                "number" => $this->month->getNumber(),
                "text" => $this->month->getText(),
            ],
            "day" => $this->day,
            "dayOfWeek" => [
                "number" => $this->dayOfWeek->getNumber(),
                "text" => $this->dayOfWeek->getText(),
            ],
            "season" => [
                "number" => $this->season->getNumber(),
                "text" => $this->season->getText(),
            ],
            "unixTime" => $this->unixTime,
        ];
    }

}
