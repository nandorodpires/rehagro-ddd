<?php

namespace Lab\Domain\Repositories;

use Lab\Domain\Entities\Sample;
use Lab\Domain\Repositories\Contracts\RepositoryInterface;

class SampleRepository implements RepositoryInterface
{
    protected Sample $sample;

    public function __construct()
    {
        $this->sample = new Sample();
    }

    public function create($data)
    {        
        
    }
}
