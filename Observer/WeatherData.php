<?php
namespace Observer;

class WeatherData implements Subject
{
    private $observer_list = [];
    private $tem;
    private $humidity;
    private $pressure;

    /**
     *  添加指定的观察者
     *
     * @param Observer $observer
     */
    public function registerObserver(Observer $observer)
    {
        // 入栈，尾部添加观察者
        array_push($this->observer_list, $observer);
        var_dump($this->observer_list);exit;
    }

    /**
     *  删除指定的观察者
     *
     * @param Observer $observer
     */
    public function removerObserver(Observer $observer)
    {
        $obs_key = array_search($observer, $this->observer_list);
        if ($obs_key) {
            unset($this->observer_list[$obs_key]);
        }
    }

    /**
     *  调用此方法以通知观察者
     *
     * @return string
     */
    public function notifyObserver()
    {
        // 循环调用观察者自身的 update方法
        if(!empty($this->observer_list)){
            exit('1');
            foreach($this->observer_list as $theObserver){
                /** @var Observer $theObserver */
                 $theObserver->update($this->tem,$this->humidity,$this->pressure);
            }
        }
    }

    /**
     *  一个改变数据（观察者接受的数据）的方法
     *
     * @param float $tem
     * @param float $humidity
     * @param float $pressure
     * @return string
     */
    public function changeWaather($tem,$humidity,$pressure){
        $this->tem=$tem;
        $this->humidity=$humidity;
        $this->pressure=$pressure;

        // 改变数据之后，再需要的地方通知观察者
        return $this->notifyObserver();
    }

    /**
     *  WeatherData的其他方法
     */
}