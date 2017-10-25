<?php

namespace Date;

/**
 * Class DateSeasonComparator
 * @package Date
 */
class DateSeasonComparator implements DateComparator
{

    function compareTo($o1, $o2)
    {
        return $o1->getSeason() > $o2->getSeason();
    }

}
