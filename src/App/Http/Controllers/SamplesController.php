<?php

namespace Lab\App\Controllers;

use Lab\App\Services\Sample\CreateSampleService;

class SamplesController
{
    protected CreateSampleService $createSampleService;

    public function store(array $data)
    {
        return $this->createSampleService->execute($data);
    }
}
