<?php

namespace Date;

use Collection\Equality;
use JsonSerializable;

/**
 * Class Time
 * @package Time
 */
class Time implements TimeUpdatable, Equality, JsonSerializable
{

    /** @const int */
    const EPOCH_DAY = 1;
    /** @const int */
    const EPOCH_MONTH = 1;
    /** @const int */
    const EPOCH_YEAR = 1970;

    /** @var int */
    protected $unixTime;
    /** @var int */
    protected $hour;
    /** @var int */
    protected $minute;
    /** @var int */
    protected $second;

    /**
     * DateObject constructor.
     * @param int $hour
     * @param int $minute
     * @param int $second
     */
    protected function __construct($hour = 0, $minute = 0, $second = 0)
    {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    /**
     * @return Time
     */
    public static function now()
    {
        return self::fromUnixTime(time());
    }

    /**
     * @param int $hour
     * @param int $minute
     * @param int $second
     * @return Time
     */
    public static function create($hour = 0, $minute = 0, $second = 0)
    {
        return new Time($hour, $minute, $second);
    }

    /**
     * @param int $time
     * @return Time
     */
    public static function fromUnixTime($time = 0)
    {
        $timeObject = new Time();
        $timeObject->updateFromUnixTime($time);
        return $timeObject;
    }

    /**
     * @param DateTime $dateTime
     * @return Time
     */
    public static function fromDateTime(DateTime $dateTime)
    {
        return Time::create($dateTime->getHour(), $dateTime->getMinute(), $dateTime->getSecond());
    }

    /**
     * @return int
     */
    public function getUnixTime()
    {
        return $this->unixTime;
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
        $this->updateUnixTime();
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
        $this->updateUnixTime();
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
        $this->updateUnixTime();
    }

    /**
     * @param Time $object
     * @return boolean
     */
    public function equals($object)
    {
        return $this->unixTime === $object->unixTime;
    }

    /**
     * @param int $time
     */
    public function updateFromUnixTime($time)
    {
        $date = getdate($time);
        $this->unixTime = $time;
        $this->hour = $date['hours'];
        $this->minute = $date['minutes'];
        $this->second = $date['seconds'];
    }

    /**
     *
     */
    protected function updateUnixTime()
    {
        $this->unixTime = mktime(
            $this->hour,
            $this->minute,
            $this->second,
            self::EPOCH_MONTH,
            self::EPOCH_DAY,
            self::EPOCH_YEAR
        );
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
            "hour" => $this->hour,
            "minute" => $this->minute,
            "second" => $this->second,
            "unixTime" => $this->unixTime,
        ];
    }

}
