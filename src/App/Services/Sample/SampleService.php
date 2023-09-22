<?php

namespace Lab\App\Services\Sample;

use Lab\App\DTO\SampleDTO;
use Lab\Domain\Repositories\SampleRepository;

class SampleService
{
    protected SampleRepository $sampleRepository;

    public function __construct(SampleRepository $sampleRepository)
    {
        $this->sampleRepository = $sampleRepository;
    }

    public function create(SampleDTO $data)
    {
        return $this->sampleRepository->create($data);
    }
}
