<?php

namespace Date;

use Collection\Equality;

/**
 * Class Month
 * @package Time
 */
class Month implements Equality, TimeUpdatable
{

    const JANUARY = 1;
    const FEBRUARY = 2;
    const MARCH = 3;
    const APRIL = 4;
    const MAY = 5;
    const JUNE = 6;
    const JULY = 7;
    const AUGUST = 8;
    const SEPTEMBER = 9;
    const OCTOBER = 10;
    const NOVEMBER = 11;
    const DECEMBER = 12;

    /** @var int */
    protected $number;
    /** @var string */
    protected $text;

    /**
     * Month constructor.
     * @param int $month
     */
    public function __construct($month = self::JANUARY)
    {
        $this->setNumber($month);
    }

    /**
     * @param int $time
     * @return Month
     */
    public static function fromTime($time)
    {
        $month = new Month();
        $month->updateFromUnixTime($time);
        return $month;
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
        $this->updateText();
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param Month $object
     * @return mixed
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
        $this->number = $date['mon'];
        $this->text = $date['month'];
    }

    protected function updateText()
    {
        switch ($this->getNumber()) {
            case self::JANUARY:
                $this->text = 'January';
                return;
            case self::FEBRUARY:
                $this->text = 'February';
                return;
            case self::MARCH:
                $this->text = 'March';
                return;
            case self::APRIL:
                $this->text = 'April';
                return;
            case self::MAY:
                $this->text = 'May';
                return;
            case self::JUNE:
                $this->text = 'June';
                return;
            case self::JULY:
                $this->text = 'July';
                return;
            case self::AUGUST:
                $this->text = 'August';
                return;
            case self::SEPTEMBER:
                $this->text = 'September';
                return;
            case self::OCTOBER:
                $this->text = 'October';
                return;
            case self::NOVEMBER:
                $this->text = 'November';
                return;
            case self::DECEMBER:
                $this->text = 'December';
                return;
            default:
                $this->text = '';
        }
    }

}
