<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
//$a = date_create();
//$b = time($a);
//print_r($b);

class StopWatch
{
    public $starTime;
    public $endTime;
    public $time;

    function __construct()
    {
//$this->time = date();
        $this->starTime = microtime(true);

    }

    function getStarTime()
    {
        return strftime("%A %d-%B-%Y %H:%M:%S:%u0", $this->starTime);
    }

    function getEndTime()
    {
        return strftime("%A %d-%B-%Y %H:%M:%S:%u", $this->endTime);
    }

    function star()
    {
        $this->starTime = microtime(true);
    }

    function stop()
    {
        $this->endTime = microtime(true);

    }

    function getElapsedTime()
    {
        return ($this->endTime)*1000 - ($this->starTime)*1000;
    }
}
$date = new StopWatch();

echo $date->getStarTime(). "<br>";
echo $date->getStarTime(). "<br>";
echo $date->endTime. "<br>";
echo $date->starTime. "<br>";
$date->stop();
echo $date->endTime. "<br>";


echo 'thời gian đã trôi qua '.$date->getElapsedTime().' milisecond';
?>