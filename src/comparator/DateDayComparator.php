<?php

namespace Date;

/**
 * Class DateDayComparator
 * @package Time
 */
class DateDayComparator implements DateComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getDay() > $o2->getDay();
    }

}
