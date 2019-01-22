<?php


namespace Strategy;


class FlyWithRocket implements Fly
{

    public function fly()
    {
        echo '借助火箭飞行';
        echo '<br>';
    }
}