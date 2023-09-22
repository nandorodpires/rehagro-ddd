<?php

namespace Lab\Domain\Entities;

use DateTime;

class Sample
{
    protected int $code;
    protected Customer $customer;
    protected SampleType $type;
    protected DateTime $entryDate;
    protected ?DateTime $departureDate = null;
    protected array $packages = [];
    protected ?string $description = null;

    public function __construct(int $code, Customer $customer, DateTime $entryDate)
    {
        $this->code = $code;
        $this->customer = $customer;
        $this->entryDate = $entryDate;
    }

    public function addPackage(int $code)
    {
        $this->packages[] = new Package($code);
        return $this;
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
