<?php

namespace Date;

/**
 * Class DateDayOfWeekComparator
 * @package Time
 */
class DateDayOfWeekComparator implements DateComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getDayOfWeek()->getNumber() > $o2->getDayOfWeek()->getNumber();
    }

}
