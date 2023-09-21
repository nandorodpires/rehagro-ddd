<?php

namespace Lab\App\Repositories;

use Lab\Domain\Repositories\SampleRepositoryInterface;

class SampleRepository implements SampleRepositoryInterface
{
    public function create(array $data)
    {        
        return true;
    }
}
