<?php

namespace SimpleFactory;
/**
 *  简单工厂类
 *
 *  更像是一种编程习惯而不是设计模式
 * Class SimpleFactory
 * @package SimpleFactory
 */
class SimpleFactory
{
    private $pizza = null;

    /**
     *  得到Pizza
     *
     * @param $type
     * @return Pizza
     */
    public function createPizza($type)
    {
        if (0 == strcmp('cheese', $type)) {
            $this->pizza = new CheesePizza($type);
        } elseif (0 == strcmp('veggie', $type)) {
            $this->pizza = new VeggiePizza($type);
        }

        return $this->pizza;
    }
}