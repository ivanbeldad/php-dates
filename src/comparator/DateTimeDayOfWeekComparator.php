<?php

namespace Date;

/**
 * Class DateTimeDayOfWeekComparator
 * @package Time
 */
class DateTimeDayOfWeekComparator implements DateTimeComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getDayOfWeek()->getNumber() > $o2->getDayOfWeek()->getNumber();
    }

}
