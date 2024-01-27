<?php

namespace SOLID\ISP;

class Truck implements Vehicle,Heavy
{

    public function move()
    {
        echo "I am moving";
    }


    public function stop()
    {
        echo "Stopping....";
    }

    public function carryHeavyCargo()
    {
        echo "Carrying the cargo weighs 2000kg.";
    }
}