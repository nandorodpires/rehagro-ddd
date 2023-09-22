<?php

namespace Lab\App\Controllers;

use Lab\App\DTO\SampleDTO;
use Lab\App\Services\Sample\SampleService;

class SamplesController
{
    protected SampleService $createSampleService;

    public function store(array $data)
    {
        $sampleDTO = new SampleDTO($data);
        return $this->createSampleService->create($sampleDTO);
    }
}
