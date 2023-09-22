<?php

namespace Lab\Domain\Repositories;

use Lab\Domain\Entities\Sample;

interface SampleRepositoryInterface {
    public function create(Sample $sample);
}