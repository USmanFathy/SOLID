<?php

namespace SOLID\ISP;

class Car implements Vehicle,Speedable,Entertainment
{

    public function move()
    {
        echo "I am moving";
    }

    public function accelerate()
    {
        echo "I can accelerate up to 200Km/h";
    }

    public function stop()
    {
        echo "Stopping....";
    }

    public function musicPlay()
    {
        echo "Playing your Favorite music";
    }

    public function pause()
    {
        echo "Pausing current track";
    }

    public function rewind()
    {
        echo 'I will rewind the tape';
    }

}