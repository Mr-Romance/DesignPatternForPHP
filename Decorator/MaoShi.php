<?php

namespace Decorator;


class MaoShi extends CondimentDecorator
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
        $this->description = '添加猫屎';
        return $this->beverage->getDescription() . '+' . $this->description;
    }

    /**
     *
     *
     * @return mixed
     */
    public function cost()
    {
        $this->price = 5.8;
        return $this->price + $this->beverage->cost();
    }
}