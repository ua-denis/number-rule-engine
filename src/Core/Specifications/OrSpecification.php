<?php

declare(strict_types=1);

namespace App\Core\Specifications;

class OrSpecification implements Specification
{
    private Specification $spec1;
    private Specification $spec2;

    public function __construct(Specification $spec1, Specification $spec2)
    {
        $this->spec1 = $spec1;
        $this->spec2 = $spec2;
    }

    public function isSatisfiedBy(int $number): bool
    {
        return $this->spec1->isSatisfiedBy($number) || $this->spec2->isSatisfiedBy($number);
    }
}