<?php

namespace SOLID\ISP;

class Bus implements Vehicle
{

    public function move()
    {
        echo "I am moving";
    }

    public function stop()
    {
        echo "Stopping....";
    }

}