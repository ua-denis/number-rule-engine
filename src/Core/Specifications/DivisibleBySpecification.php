<?php

declare(strict_types=1);

namespace App\Core\Specifications;

class DivisibleBySpecification implements Specification
{
    private int $divisor;

    public function __construct(int $divisor)
    {
        $this->divisor = $divisor;
    }

    public function isSatisfiedBy(int $number): bool
    {
        return $number % $this->divisor === 0;
    }
}