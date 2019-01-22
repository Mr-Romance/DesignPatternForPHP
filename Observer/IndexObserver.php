<?php

namespace Observer;
class IndexObserver
{
    private $weatherData;

    public function __construct()
    {
        $this->weatherData = new WeatherData();
    }

    public function listenSubject()
    {
        return $this->weatherData->changeWaather(10,20,30);
    }
}