<?php

namespace SOLID\OCP;

abstract class Human
{
    /**
     * @var string
     */
    private $name ;
    /**
     * @var string
     */
    private $address;
    /**
     * @var int
     */
    private $number;

    /**
     * @var Buying
     */
    private $buy;

    /**
     * @param string $name
     * @param string $address
     * @param int $number
     * @param Buying $buy
     */
    public function __construct($name, $address, $number, Buying $buy)
    {
        $this->name = $name;
        $this->address = $address;
        $this->number = $number;
        $this->buy = $buy;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return Buying
     */
    public function getBuy()
    {
        return $this->buy;
    }

    /**
     * @param Buying $buy
     */
    public function setBuy($buy)
    {
        $this->buy = $buy;
    }


    public function buyMethod(){
        return $this->getBuy()->buy();
    }

}