<?php

namespace FactoryMethod;
/**
 *  上海的必败客披萨工厂
 *
 * Class BBkFactorySH
 * @package FactoryMethod
 */
class BBkFactorySH extends PizzaFactory
{
    public function createPizza($type): Pizza {
        $pizza = null;
        if (0==strcmp($type, 'shang_hai')) {
            $pizza = new PizzaShangHai();
            // 不喜欢构造函数，所以没用
            $pizza->setName('上海杏花楼');
        }elseif(0==strcmp($type,'niu_yue')){
            $pizza=new PizzaNYStyle();
            $pizza->setName('上海纽约风味');
        }
        return $pizza;
    }
}