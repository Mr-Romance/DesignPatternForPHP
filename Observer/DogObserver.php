<?php
namespace Observer;

class DogObserver implements Observer
{
    private $subject;

    // 将自身注册为干插着
    public function toBeObserver()
    {
        $this->subject = new WeatherData();
        $this->subject->registerObserver(clone DogObserver);
    }

    /**
     * @param float $tem （php7之后可以指定变量类型，我这里是php5.6）
     * @param float $humidity
     * @param float $pressure
     * @return string
     *
     */
    public function update($tem, $humidity, $pressure)
    {
        return $tem . '-' . $humidity . '-' . $pressure;
    }
}