<?php

namespace Lab\Domain\Entities;

class Customer
{
    protected int $code;

    public function __construct(int $code)
    {
        $this->code = $code;
    }
}
