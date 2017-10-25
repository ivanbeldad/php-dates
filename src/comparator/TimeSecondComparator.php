<?php

namespace Date;

/**
 * Class TimeSecondComparator
 * @package Time
 */
class TimeSecondComparator implements TimeComparator
{

    public function compareTo($o1, $o2)
    {
        return $o1->getSecond() > $o2->getSecond();
    }

}
