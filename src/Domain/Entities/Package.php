<?php

namespace Lab\Domain\Entities;

class Package {

    protected int $code;
    protected string $name;

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

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }
}