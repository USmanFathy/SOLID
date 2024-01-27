<?php

namespace SOLID\LSP;

class Encrypt
{
    /**
     * @var string
     */
    protected $string;

    public function getString(): string
    {
        return $this->string;
    }

    public function setString(string $string): void
    {
        $this->string = $string;
    }


    public function encrypt(){
        return md5($this->getString());
    }
}