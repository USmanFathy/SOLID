<?php

namespace SOLID\SRP;

class Owner
{
    /**
     * @var string
     */
    private $name ;
    /**
     * @var int
     */
    private $age ;
    /**
     * @var int
     */
    private $number ;
    /**
     * @var string
     */
    private $address ;
    /**
     * @var string
     */
    private $email ;

    /**
     * @param string $name
     * @param int $age
     * @param int $number
     * @param string $address
     * @param string $email
     */
    public function __construct($name, $age, $number, $address, $email)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setNumber($number);
        $this->setAddress($address);
        $this->setEmail($email);
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
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
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
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }





}