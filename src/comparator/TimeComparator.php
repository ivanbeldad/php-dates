<?php

namespace Time;

use Collection\Comparator;

/**
 * Interface TimeComparator
 * @package Time
 */
interface TimeComparator extends Comparator
{

    /**
     * @param Time $o1
     * @param Time $o2
     * @return int
     */
    public function compareTo($o1, $o2);

}
