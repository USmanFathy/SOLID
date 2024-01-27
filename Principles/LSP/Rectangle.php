<?php

namespace SOLID\LSP;

class Rectangle
{
    /**
     * @var int
     */
    protected $width ;
    /**
     * @var int
     */
    protected $height;

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->width * $this->height;
    }
}