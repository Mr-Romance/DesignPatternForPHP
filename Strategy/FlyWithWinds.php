<?php
namespace Strategy;

class FlyWithWinds implements Fly
{

    public function fly()
    {
        echo '用翅膀飞';
        echo '<br>';
    }
}