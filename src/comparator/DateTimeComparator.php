<?php

namespace Date;

use Collection\Comparator;

/**
 * Interface DateTimeComparator
 * @package Time
 */
interface DateTimeComparator extends Comparator
{

    /**
     * @param DateTime $o1
     * @param DateTime $o2
     * @return int
     */
    public function compareTo($o1, $o2);

}
