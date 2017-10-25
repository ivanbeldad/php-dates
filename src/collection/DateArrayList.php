<?php

namespace Date;

use Collection\ArrayList;

/**
 * Class DateArrayList
 * @package Time
 */
class DateArrayList extends ArrayList
{

    /** @var Date */
    protected $type;

    /**
     * DateArrayList constructor.
     * @param array $elements
     */
    public function __construct(array $elements = [])
    {
        $this->type = Date::now();
        parent::__construct($elements);
    }

    /**
     * @param Date $element
     */
    public function add($element)
    {
        parent::add($element);
    }

    /**
     * @param int $index
     * @param Date $element
     */
    public function addAt($index, $element)
    {
        parent::addAt($index, $element);
    }

    /**
     * @param Date[] $elements
     */
    public function addAll($elements)
    {
        parent::addAll($elements);
    }

    /**
     * @param int $index
     * @param Date[] $elements
     */
    public function addAllAt($index, $elements)
    {
        parent::addAllAt($index, $elements);
    }

    /**
     * @param int $index
     * @return Date
     */
    public function get($index)
    {
        return parent::get($index);
    }

    /**
     * @param Date $element
     */
    public function remove($element)
    {
        parent::remove($element);
    }

    /**
     * @param int $index
     */
    public function removeAt($index)
    {
        parent::removeAt($index);
    }

    /**
     *
     */
    public function clear()
    {
        parent::clear();
    }

    /**
     * @return int
     */
    public function size()
    {
        return parent::size();
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return parent::isEmpty();
    }

    /**
     * @return Date[]
     */
    public function toArray()
    {
        return parent::toArray();
    }

    /**
     * @param Date $element
     * @return bool
     */
    public function containts($element)
    {
        return parent::containts($element);
    }

    /**
     * @param mixed $element
     * @return int
     */
    public function indexOf($element)
    {
        return parent::indexOf($element);
    }

    /**
     * @param callable|DateComparator $comparator
     * @param bool $ascendent
     */
    public function sort($comparator, $ascendent = true)
    {
        parent::sort($comparator, $ascendent);
    }

    /**
     * @param callable $callable
     */
    public function forEachDo(callable $callable)
    {
        parent::forEachDo($callable);
    }

    /**
     * @param callable $callable
     * @return DateArrayList|mixed
     */
    public function filter(callable $callable)
    {
        return parent::filter($callable);
    }

    /**
     * @param callable $callable
     * @return DateArrayList|mixed
     */
    public function map(callable $callable)
    {
        return parent::map($callable);
    }

    /**
     * @param callable $callable
     * @param mixed $initialValue
     * @return mixed
     */
    public function reduce(callable $callable, $initialValue)
    {
        return parent::reduce($callable, $initialValue);
    }

}
