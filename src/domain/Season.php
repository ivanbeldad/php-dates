<?php

namespace Time;

use Collection\Equality;

/**
 * Class Season
 * @package Time
 */
class Season implements Equality, TimeUpdatable
{

    const SPRING = 1;
    const SUMMER = 2;
    const AUTUMN = 3;
    const WINTER = 4;

    /** @var int */
    protected $number;
    /** @var string */
    protected $text;

    /**
     * Season constructor.
     * @param int $season
     */
    public function __construct($season = self::SPRING)
    {
        $this->setNumber($season);
    }

    /**
     * @param int $time
     * @return Season
     */
    public static function fromTime($time)
    {
        $season = new Season();
        $season->updateFromUnixTime($time);
        return $season;
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
        $this->updateSeasonText();
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param Season $object
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
        $year = getdate($time)['year'];
        $startSpring = mktime(0, 0, 0, 3, 21, $year);
        $endSpring = mktime(0, 0, 0, 6, 20, $year);
        $startSummer = mktime(0, 0, 0, 6, 21, $year);
        $endSummer = mktime(0, 0, 0, 9, 22, $year);
        $startAutumn = mktime(0, 0, 0, 9, 23, $year);
        $endAutumn = mktime(0, 0, 0, 12, 20, $year);
        if ($time >= $startSpring && $time <= $endSpring) {
            $this->setNumber(self::SPRING);
        } else if ($time >= $startSummer && $time <= $endSummer) {
            $this->setNumber(self::SUMMER);
        } else if ($time >= $startAutumn && $time <= $endAutumn) {
            $this->setNumber(self::AUTUMN);
        } else {
            $this->setNumber(self::WINTER);
        }
    }

    protected function updateSeasonText()
    {
        switch ($this->number) {
            case self::SPRING:
                $this->text = 'Spring';
                return;
            case self::SUMMER:
                $this->text = 'Summer';
                return;
            case self::AUTUMN:
                $this->text = 'Autumn';
                return;
            case self::WINTER:
                $this->text = 'Winter';
                return;
            default:
                $this->text = '';
        }
    }

}
