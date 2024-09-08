<?php

declare(strict_types=1);

namespace App\Infrastructure\Services;

class SpecificationService
{
    private array $specifications;

    public function __construct(array $specifications)
    {
        $this->specifications = $specifications;
    }

    public function checkNumber(int $number): string
    {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($number)) {
                return $specification->getMessage();
            }
        }
        
        return (string)$number;
    }

    public function checkNumbers(array $numbers): array
    {
        $results = [];

        foreach ($numbers as $number) {
            $results[] = $this->checkNumber($number);
        }

        return $results;
    }
}