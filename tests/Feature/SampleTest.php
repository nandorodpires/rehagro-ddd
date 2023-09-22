<?php

use Lab\App\DTO\SampleDTO;
use Lab\Domain\Repositories\SampleRepository;
use Lab\App\Services\Sample\SampleService;
use PHPUnit\Framework\TestCase;

final class SampleTest extends TestCase
{
    public function testCreateNewSampleResponseTrue()
    {
        $data = [
            'code' => '11000000013',
            'customer' => '2005',
            'type' => '4',
            'entryDate' => '2023-09-22',
            'departureDate' => null,
            'packages' => [12, 13, 14],
            'description' => null,
        ];

        $sampleDTO = new SampleDTO($data);        
        $sampleService = new SampleService(new SampleRepository);
        $response = $sampleService->create($sampleDTO);
        
        $this->assertTrue($response);
    }
}
