<?php

namespace SOLID\OCP;

class Client
{
    /**
     * @var Human
     */
    private $human;
    /**
     * @var string
     */
    private $landArea;

    /**
     * @param Human $human
     * @param string $landArea
     */
    public function __construct(Human $human, $landArea)
    {
        $this->human = $human;
        $this->landArea = $landArea;
    }


    /**
     * @return Human
     */
    public function getHuman()
    {
        return $this->human;
    }

    /**
     * @param Human $human
     */
    public function setHuman($human)
    {
        $this->human = $human;
    }

    /**
     * @return string
     */
    public function getLandArea()
    {
        return $this->landArea;
    }

    /**
     * @param string $landArea
     */
    public function setLandArea($landArea)
    {
        $this->landArea = $landArea;
    }

    public function buy(){
        return $this->human->buyMethod();
    }


}