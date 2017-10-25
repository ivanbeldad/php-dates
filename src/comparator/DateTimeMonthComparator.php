<?php

namespace Time;

/**
 * Class DateTimeMonthComparator
 * @package Time
 */
class DateTimeMonthComparator implements DateTimeComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getMonth()->getNumber() > $o2->getMonth()->getNumber();
    }

}
