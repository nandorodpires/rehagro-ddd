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

    /**
     * Get the value of code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Get the value of customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the value of entryDate
     */
    public function getEntryDate()
    {
        return $this->entryDate;
    }

    /**
     * Get the value of departureDate
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Get the value of packages
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }
}
