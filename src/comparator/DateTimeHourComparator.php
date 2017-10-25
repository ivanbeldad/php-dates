<?php

namespace Date;

/**
 * Class DateTimeHourComparator
 * @package Time
 */
class DateTimeHourComparator implements DateTimeComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getHour() > $o2->getHour();
    }

}
