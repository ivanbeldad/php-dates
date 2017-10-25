<?php

namespace Time;

/**
 * Class DateMonthComparator
 * @package Time
 */
class DateMonthComparator implements DateComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getMonth()->getNumber() > $o2->getMonth()->getNumber();
    }

}
