<?php

namespace Date;

/**
 * Class DateTimeMinuteComparator
 * @package Time
 */
class DateTimeMinuteComparator implements DateTimeComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getMinute() > $o2->getMinute();
    }

}
