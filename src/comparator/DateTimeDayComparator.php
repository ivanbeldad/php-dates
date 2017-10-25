<?php

namespace Date;

/**
 * Class DateTimeDayComparator
 * @package Time
 */
class DateTimeDayComparator implements DateTimeComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getDay() > $o2->getDay();
    }

}
