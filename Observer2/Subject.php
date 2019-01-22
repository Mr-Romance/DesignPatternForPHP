<?php

namespace Observer2;

use SplObserver;

class Subject implements \SplSubject
{

    // 观察者对象
    private $observers;

    private $upd_data = 10;

    private $upd_msg = '还不该吃饭';

    public function __construct()
    {
        // 数据结构对象容器
        $this->observers = new \SplObjectStorage();
    }

    /**
     *  注册观察者
     *
     * Attach an SplObserver
     * @link https://php.net/manual/en/splsubject.attach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to attach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     *  注销观察者
     *
     * Detach an observer
     * @link https://php.net/manual/en/splsubject.detach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to detach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * Notify an observer
     * @link https://php.net/manual/en/splsubject.notify.php
     * @return void
     * @since 5.1.0
     */
    public function notify()
    {
        // 循环调用观察者自身的update方法
        if ($this->observers->count() > 0) {
            /** @var \SplObserver $observer */
            foreach ($this->observers as $observer) {
                $observer->update($this);
            }
        }
    }

    /**
     *  数据改变，同时通知观察者
     *
     * @param $upd_data
     */
    public function updData($upd_data)
    {
        $this->upd_data = $upd_data;

        // 当数据改变时，再需要通知观察者的地方调用 notify
        $this->notify();
    }

    /**
     *  消息改变，同时通知观察者
     *
     * @param $upd_msg
     */
    public function updMsg($upd_msg)
    {
        $this->upd_msg = $upd_msg;

        // 这个 notify 也可以不写在方法中，灵活运用
        $this->notify();
    }

    /**
     * @return mixed
     */
    public function getUpdData()
    {
        return $this->upd_data;
    }

    /**
     * @return mixed
     */
    public function getUpdMsg()
    {
        return $this->upd_msg;
    }
}