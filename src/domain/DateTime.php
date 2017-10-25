<?php

namespace Date;

use Collection\Equality;
use JsonSerializable;

/**
 * Class DateTime
 * @package Time
 */
class DateTime implements Equality, TimeUpdatable, JsonSerializable
{

    /** @var int */
    protected $unixTime;
    /** @var Date */
    protected $date;
    /** @var Time */
    protected $time;

    /**
     * DateTime constructor.
     * @param int $time
     */
    protected function __construct($time = 0)
    {
        $this->date = Date::now();
        $this->time = Time::now();
        $this->updateFromUnixTime($time);
    }

    /**
     * @return DateTime
     */
    public static function now()
    {
        return new DateTime(time());
    }

    /**
     * @param int $time
     * @return DateTime
     */
    public static function fromUnixTime($time = 0)
    {
        return new DateTime($time);
    }

    /**
     * @param Date $date
     * @return DateTime
     */
    public static function fromDate(Date $date)
    {
        return DateTime::create($date->getYear(), $date->getMonth()->getNumber(), $date->getDay());
    }

    /**
     * @param Time $time
     * @return DateTime
     */
    public static function fromTime(Time $time)
    {
        return DateTime::create(1970, 1, 1, $time->getHour(), $time->getMinute(), $time->getSecond());
    }

    /**
     * @param int $year
     * @param int $month
     * @param int $day
     * @param int $hour
     * @param int $minute
     * @param int $second
     * @return DateTime
     */
    public static function create($year = 1970, $month = Month::JANUARY, $day = 1, $hour = 0, $minute = 0, $second = 0)
    {
        $date = new DateTime();
        $date->setYear($year);
        $date->setMonth($month);
        $date->setDay($day);
        $date->setHour($hour);
        $date->setMinute($minute);
        $date->setSecond($second);
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
        $this->updateFromUnixTime($this->unixTime);
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->date->getYear();
    }

    /**
     * @param int $year
     */
    public function setYear($year)
    {
        $this->date->setYear($year);
        $this->updateFields();
    }

    /**
     * @return Month
     */
    public function getMonth()
    {
        return $this->date->getMonth();
    }

    /**
     * @param int $month
     */
    public function setMonth($month)
    {
        $this->date->setMonth($month);
        $this->updateFields();
    }

    /**
     * @return int
     */
    public function getDay()
    {
        return $this->date->getDay();
    }

    /**
     * @param int $day
     */
    public function setDay($day)
    {
        $this->date->setDay($day);
        $this->updateFields();
    }

    /**
     * @return DayOfWeek
     */
    public function getDayOfWeek()
    {
        return $this->date->getDayOfWeek();
    }

    /**
     * @return Season
     */
    public function getSeason()
    {
        return $this->date->getSeason();
    }

    /**
     * @return int
     */
    public function getHour()
    {
        return $this->time->getHour();
    }

    /**
     * @param int $hour
     */
    public function setHour($hour)
    {
        $this->time->setHour($hour);
        $this->updateFields();
    }

    /**
     * @return int
     */
    public function getMinute()
    {
        return $this->time->getMinute();
    }

    /**
     * @param int $minute
     */
    public function setMinute($minute)
    {
        $this->time->setMinute($minute);
        $this->updateFields();
    }

    /**
     * @return int
     */
    public function getSecond()
    {
        return $this->time->getSecond();
    }

    /**
     * @param int $second
     */
    public function setSecond($second)
    {
        $this->time->setSecond($second);
        $this->updateFields();
    }

    /**
     * @return bool
     */
    public function isLeapYear()
    {
        return $this->date->isLeapYear();
    }

    /**
     * @param DateTime $object
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
        $this->unixTime = $time;
        $this->date->updateFromUnixTime($time);
        $this->time->updateFromUnixTime($time);
    }

    protected function updateFields()
    {
        $this->setUnixTime(mktime(
            $this->time->getHour(),
            $this->time->getMinute(),
            $this->time->getSecond(),
            $this->date->getMonth()->getNumber(),
            $this->date->getDay(),
            $this->date->getYear()));
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
            "year" => $this->date->getYear(),
            "month" => [
                "number" => $this->date->getMonth()->getNumber(),
                "text" => $this->date->getMonth()->getText(),
            ],
            "day" => $this->date->getDay(),
            "dayOfWeek" => [
                "number" => $this->date->getDayOfWeek()->getNumber(),
                "text" => $this->date->getDayOfWeek()->getText(),
            ],
            "season" => [
                "number" => $this->date->getSeason()->getNumber(),
                "text" => $this->date->getSeason()->getText(),
            ],
            "hour" => $this->time->getHour(),
            "minute" => $this->time->getMinute(),
            "second" => $this->time->getSecond(),
            "unixTime" => $this->unixTime,
        ];
    }

}
