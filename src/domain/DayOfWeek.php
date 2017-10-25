<?php

namespace Date;

use Collection\Equality;

/**
 * Class DayOfWeek
 * @package Time
 */
class DayOfWeek implements Equality, TimeUpdatable
{

    const SUNDAY = 0;
    const MONDAY = 1;
    const TUESDAY = 2;
    const WEDNESDAY = 3;
    const THURSDAY = 4;
    const FRIDAY = 5;
    const SATURDAY = 6;

    /** @var int */
    protected $number;
    /** @var string */
    protected $text;

    /**
     * DayOfWeek constructor.
     * @param int $dayOfWeek
     */
    public function __construct($dayOfWeek = self::SUNDAY)
    {
        $this->setNumber($dayOfWeek);
    }

    /**
     * @param int $time
     * @return DayOfWeek
     */
    public static function fromTime($time)
    {
        $dayOfWeek = new DayOfWeek();
        $dayOfWeek->updateFromUnixTime($time);
        return $dayOfWeek;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
        $this->updateDayOfWeekText();
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param DayOfWeek $object
     * @return boolean
     */
    public function equals($object)
    {
        return $this->number === $object->number;
    }

    /**
     * @param int $time
     */
    public function updateFromUnixTime($time)
    {
        $date = getdate($time);
        $this->number = $date['wday'];
        $this->text = $date['weekday'];
    }

    /**
     *
     */
    protected function updateDayOfWeekText()
    {
        switch ($this->number) {
            case self::SUNDAY:
                $this->text = 'Sunday';
                return;
            case self::MONDAY:
                $this->text = 'Monday';
                return;
            case self::TUESDAY:
                $this->text = 'Tuesday';
                return;
            case self::WEDNESDAY:
                $this->text = 'Wednesday';
                return;
            case self::THURSDAY:
                $this->text = 'Thursday';
                return;
            case self::FRIDAY:
                $this->text = 'Friday';
                return;
            case self::SATURDAY:
                $this->text = 'Saturday';
                return;
            default:
                $this->text = '';
        }
    }

}
