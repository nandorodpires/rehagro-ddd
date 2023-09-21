<?php

namespace Lab\Domain\Entities;

use DateTime;

class Sample
{
    protected int $code;
    protected Customer $customer;
    protected SampleType $type;
    protected DateTime $entryDate;
    protected DateTime $departureDate;
    protected array $packages = [];
    protected string $description;
}
