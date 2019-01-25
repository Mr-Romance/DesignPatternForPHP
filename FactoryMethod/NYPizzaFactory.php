<?php

namespace FactoryMethod;
class NYPizzaFactory extends FactoryMethod
{

    /**
     *  所有子类继承这个方法，具体的new再子类中实现
     *
     * @param string $type
     * @return Pizza
     */
    function createPizza(string $type): Pizza
    {
        $pizza = null;
        if (0 == strcmp($type, 'cheeese')) {
            $pizza = new CheesePizza($type);
            $pizza->setPizzaName($type . '纽约风味加工');
        } elseif (0 == strcmp($type, 'veggie')) {
            $pizza = new VeggiePizza($type);
            $pizza->setPizzaName($type . '纽约风味加工');
        }

        return $pizza;
    }
}