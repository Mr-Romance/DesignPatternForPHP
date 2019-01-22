<?php

namespace Strategy;
abstract class MyDuck
{
    private $fly;

    public function __construct(Fly $fly)
    {
        $this->fly = $fly;
    }

    /**
     *  执行被委托的飞行方法
     *
     * @return mixed
     */
    public function doFly(){
        return $this->fly->fly();
    }

    /**
     *  动态的改变飞行的行为
     *
     * @param Fly $setFly
     */
    public function setFly(Fly $setFly){
        $this->fly=$setFly;
    }

    public function others(){
        // 鸭子的其他方法
    }
}