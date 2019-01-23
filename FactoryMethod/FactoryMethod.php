<?php


namespace FactoryMethod;
/**
 *  工厂方法
 *
 * Class FactoryMethod
 * @package FactoryMethod
 */
abstract class FactoryMethod
{

    /**
     *  点披萨
     *
     *
     * @param string $type
     * @return Pizza
     */
    public function orderPizza(string $type)
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    /**
     *  所有子类继承这个方法，具体的new再子类中实现
     *
     * @param string $type
     * @return Pizza
     */
    abstract function createPizza(string $type): Pizza;
}