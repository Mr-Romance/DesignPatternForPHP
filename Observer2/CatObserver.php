<?php
namespace Observer2;
use SplSubject;

class CatObserver implements \SplObserver
{
    /**
     * 从主题那里得到通知
     *
     * Receive update from subject
     * @link https://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function update(\SplSubject $subject)
    {
        // 这个 $subject 一开始比较难理解，最后发现确实很聪明
        // 我觉得这种实现方式最好，具体要得到哪些更新，由注册观察者的主题决定
        // 观察者并不知道具体是哪个主题更新了，具体哪个主题由注册观察者的主题决定
        /**
         * @var Subject $subject
         */
        $listen_data = $subject->getUpdData();
        $listen_msg = $subject->getUpdMsg();
        echo 'I am 猫猫观察者,I get new data:' . $listen_data . ';msg:' . $listen_msg;
        echo '<br>';
    }

}