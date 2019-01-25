<?php


namespace SimpleFactory;

/**
 *  具体调用工厂的地方，这里是必败客披萨店
 *
 * Class BBKPizza
 * @package SimpleFactory
 */
class BBKPizza
{
    private $factory = null;

    public function __construct(SimpleFactory $pizza)
    {
        $this->factory = $pizza;
    }

    public function orderPizza($type) : Pizza
    {
        // 制作披萨
        $the_pizza = $this->factory->createPizza($type);

        // 切片打包
        $the_pizza->prepare();
        $the_pizza->cut();
        $the_pizza->box();

        return $the_pizza;
    }
}