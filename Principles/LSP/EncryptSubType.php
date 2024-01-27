<?php

namespace SOLID\LSP;

class EncryptSubType extends Encrypt
{

    public function encrypt(){
        return sha1($this->getString());
    }
}