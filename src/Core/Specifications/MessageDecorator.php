<?php

declare(strict_types=1);

namespace App\Core\Specifications;

class MessageDecorator implements MessageSpecification
{
    private Specification $specification;
    private string $message;

    public function __construct(Specification $specification, string $message)
    {
        $this->specification = $specification;
        $this->message = $message;
    }

    public function isSatisfiedBy(int $number): bool
    {
        return $this->specification->isSatisfiedBy($number);
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}