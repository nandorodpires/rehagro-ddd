<?php

namespace Lab\Domain\Entities;

class Package {

    protected int $code;

    public function __construct(int $code)
    {
        $this->code = $code;
    }  

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }
}