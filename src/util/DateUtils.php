<?php

namespace Time;

/**
 * Class DateUtils
 * @package Time
 */
class DateUtils
{

    /**
     * @param Date $start
     * @param Date $end
     * @return DateArrayList
     * @internal param $date
     */
    public static function datesBetween(Date $start, Date $end)
    {
        if ($start->getUnixTime() > $end->getUnixTime()) {
            $minDate = $end;
            $maxDate = $start;
        } else {
            $minDate = $start;
            $maxDate = $end;
        }
        $dates = [];
        while ($minDate->getUnixTime() <= $maxDate->getUnixTime()) {
            array_push($dates, $minDate);
            $minDate = Date::create($minDate->getYear(), $minDate->getMonth()->getNumber(), $minDate->getDay() + 1);
        }
        return new DateArrayList($dates);
    }

}
