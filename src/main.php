<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

use App\Interfaces\CLI\Run;

$cli = new Run();
$cli->start();