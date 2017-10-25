<?php

namespace Date;

/**
 * Class TimeHourComparator
 * @package Time
 */
class TimeHourComparator implements TimeComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getHour() > $o2->getHour();
    }

}
