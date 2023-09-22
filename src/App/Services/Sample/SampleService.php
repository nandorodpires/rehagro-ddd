<?php

namespace Lab\App\Services\Sample;

use DateTime;
use Lab\App\DTO\SampleDTO;
use Lab\Domain\Entities\Customer;
use Lab\Domain\Entities\Sample;
use Lab\Domain\Repositories\SampleRepositoryInterface;

class SampleService
{
    protected SampleRepositoryInterface $sampleRepository;

    public function __construct(SampleRepositoryInterface $sampleRepository)
    {
        $this->sampleRepository = $sampleRepository;
    }

    public function create(SampleDTO $data)
    {
        $sample = new Sample($data->code, new Customer($data->customer), new DateTime($data->entryDate));
        foreach ($data->packages as $package) {
            $sample->addPackage($package);
        }
        return $this->sampleRepository->create($sample);
    }
}
