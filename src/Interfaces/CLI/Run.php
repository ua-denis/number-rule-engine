<?php

declare(strict_types=1);

namespace App\Interfaces\CLI;

use App\Infrastructure\DependencyInjection\Container;

class Run
{
    public function start(): void
    {
        $container = new Container();

        $numbers = range(1, 100);

        $specificationService = $container->getSpecificationService();
        $results = $specificationService->checkNumbers($numbers);
        
        foreach ($results as $result) {
            echo $result.PHP_EOL;
        }
    }
}