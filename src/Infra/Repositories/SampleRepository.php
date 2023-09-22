<?php

namespace Lab\Infra\Repositories;

use Lab\Domain\Entities\Sample;
use Lab\Domain\Repositories\SampleRepositoryInterface;

class SampleRepository implements SampleRepositoryInterface
{
    public function create(Sample $aluno)
    {        
        // aqui seria a persistencia em uma base de dados
        return true;   
    }
}
