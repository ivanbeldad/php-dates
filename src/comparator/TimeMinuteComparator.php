<?php

namespace Date;

/**
 * Class TimeMinuteComparator
 * @package Time
 */
class TimeMinuteComparator implements TimeComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getMinute() > $o2->getMinute();
    }

}
