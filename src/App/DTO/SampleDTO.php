<?php

namespace Lab\App\DTO;

class SampleDTO
{
    public string $code;
    public string $customer;
    public string $type;
    public string $entryDate;
    public ?string $departureDate;
    public array $packages;
    public ?string $description;

    public function __construct(array $data)
    {
        $this->code = $data['code'];
        $this->customer = $data['customer'];
        $this->type = $data['type'];
        $this->entryDate = $data['entryDate'];
        $this->departureDate = $data['departureDate'];
        $this->description = $data['description'];
        $this->packages = $data['packages'];
    }
}
