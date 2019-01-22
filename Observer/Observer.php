<?php
namespace Observer;
/**
 *  观察者
 *
 * Class Observer
 * @package Observer
 */
interface Observer
{
    /**
     * @param float $tem （php7之后可以指定变量类型，我这里是php5.6）
     * @param float $humidity
     * @param float $pressure
     * @return float mixed
     */
    public function update($tem,$humidity,$pressure);
}