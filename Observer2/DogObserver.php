<?php

namespace Observer2;

class DogObserver implements \SplObserver
{

    public function update(\SplSubject $subject)
    {
        /**
         * @var Subject $subject
         */
        $listen_data = $subject->getUpdData();
        $listem_msg = $subject->getUpdMsg();

        echo 'I am 狗狗观察者,data:' . $listen_data . ';msg:' . $listem_msg;
        echo '<br>';
    }
}