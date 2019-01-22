<?php


/**
 *  主题
 *
 * Interface Subject
 * @package Observer
 */
interface Subject
{
    public function registerObserver(Observer $observer);

    public function removerObserver(Observer $observer);

    /**
     *  调用此方法以通知观察者
     *
     * @return mixed
     */
    public function notifyObserver();
}