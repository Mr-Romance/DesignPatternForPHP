<?php
namespace FactoryMethod;

/**
 * 所有工厂模式都是用来封装对象的创建。工厂方法，让子类决定创建的具体对象
 *
 * Class PizzaFactory
 * @package FactoryMethod
 */
abstract class PizzaFactory
{
    /**
     *  不希望被重写，防止被子类覆盖
     *
     * @param $type
     */
    public final function orderPizza($type){
        $pizza = $this->createPizza($type);

        // 解耦，orderPizza并不知道具体哪个Pizza进来了
        $pizza->prepare();
        $pizza->cut();
        $pizza->box();
    }

    /**
     *  工厂方法，把创建具体对象的过程延迟到子类
     *
     * @param $type
     * @return Pizza
     */
    abstract function createPizza($type):Pizza;
}