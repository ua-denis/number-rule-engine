<?php

declare(strict_types=1);

namespace App\Core\Specifications;

interface MessageSpecification
{
    public function isSatisfiedBy(int $number): bool;

    public function getMessage(): string;
}