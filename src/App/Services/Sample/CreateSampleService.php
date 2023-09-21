<?php

namespace Lab\App\Services\Sample;

use Lab\App\Repositories\SampleRepository;

class CreateSampleService
{
    protected SampleRepository $sampleRepository;

    public function __construct(SampleRepository $sampleRepository)
    {
        $this->sampleRepository = $sampleRepository;
    }

    public function execute(array $data)
    {
        return $this->sampleRepository->create($data);
    }
}
