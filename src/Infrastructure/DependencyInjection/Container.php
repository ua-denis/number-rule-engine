<?php

declare(strict_types=1);

namespace App\Infrastructure\DependencyInjection;

use App\Core\Specifications\AndSpecification;
use App\Core\Specifications\DivisibleBySpecification;
use App\Core\Specifications\MessageDecorator;
use App\Core\Specifications\OrSpecification;
use App\Infrastructure\Services\SpecificationService;

class Container
{
    public function getSpecificationService(): SpecificationService
    {
        $specifications = [
            new MessageDecorator(
                new DivisibleBySpecification(3),
                'Number is divisible by 3.'
            ),
            new MessageDecorator(
                new DivisibleBySpecification(10),
                'Number is divisible by 10.'
            ),
            new MessageDecorator(
                new AndSpecification(
                    new DivisibleBySpecification(5),
                    new DivisibleBySpecification(13)
                ),
                'Number is divisible by both 5 and 13.'
            ),
            new MessageDecorator(
                new OrSpecification(
                    new DivisibleBySpecification(4),
                    new DivisibleBySpecification(12)
                ),
                'Number is divisible by 4 or 12.'
            )
        ];

        return new SpecificationService($specifications);
    }
}