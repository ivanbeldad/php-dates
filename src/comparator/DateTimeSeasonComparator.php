<?php

namespace Date;

/**
 * Class DateTimeSeasonComparator
 * @package Time
 */
class DateTimeSeasonComparator implements DateTimeComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getSeason()->getNumber() > $o2->getSeason()->getNumber();
    }

}
