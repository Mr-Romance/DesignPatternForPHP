<?php


namespace Decorator;


class Milk extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        parent::__construct($beverage);
    }

    /**
     * 得到描述
     *
     * @return mixed
     */
    public function getDescription()
    {
        $this->description = '添加牛奶';
        return $this->beverage->getDescription() . '+' . $this->description;
    }

    /**
     *
     *
     * @return mixed
     */
    public function cost()
    {
        $this->price = 10;
        // 调料的价格+杯装饰者的价格
        return $this->price + $this->beverage->cost();
    }
}