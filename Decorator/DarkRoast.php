<?php
namespace Decorator;
class DarkRoast implements Beverage
{
    private $price = 10;
    private $des = '深度烘焙';

    /**
     *  计算价格的方法
     *
     * @return mixed
     */
    public function cost()
    {
        return $this->setPrice(22);
    }

    /**
     *  改变咖啡的价格
     *
     * @param $price
     * @return int
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this->price;
    }

    /**
     * 得到描述
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->des . '￥' . $this->price;
    }
}