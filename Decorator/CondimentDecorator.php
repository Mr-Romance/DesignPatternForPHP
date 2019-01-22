<?php


namespace Decorator;

/**
 *  调料装饰者，扩展自 Beverage
 *
 *  调料装饰者类继承自饮料，所以调料装饰者能够取代饮料
 *
 * Class CondimentDecorator
 * @package Decorator
 */
abstract class CondimentDecorator implements Beverage
{
    protected $price;
    protected $description;
    // 饮料实例
    protected $beverage;

    /**
     *  构造方法
     *
     * CondimentDecorator constructor.
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
}