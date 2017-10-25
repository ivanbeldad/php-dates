<?php

namespace Date;

use Collection\Comparator;

/**
 * Interface DateComparator
 * @package Time
 */
interface DateComparator extends Comparator
{

    /**
     * @param Date $o1
     * @param Date $o2
     * @return int
     */
    public function compareTo($o1, $o2);

}
