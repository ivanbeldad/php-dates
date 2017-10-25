<?php

namespace Date;

/**
 * Class DateSeasonComparator
 * @package Time
 */
class DateSeasonComparator implements DateComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getSeason()->getNumber() > $o2->getSeason()->getNumber();
    }

}
