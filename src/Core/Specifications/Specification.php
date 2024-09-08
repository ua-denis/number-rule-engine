<?php

declare(strict_types=1);

namespace App\Core\Specifications;

interface Specification
{
    public function isSatisfiedBy(int $number): bool;
}