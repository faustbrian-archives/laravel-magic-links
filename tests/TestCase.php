<?php

declare(strict_types=1);

namespace Konceiver\MagicLinks\Tests;

use Konceiver\MagicLinks\Providers\MagicLinkServiceProvider;
use Laravel\Fortify\FortifyServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            FortifyServiceProvider::class,
            MagicLinkServiceProvider::class,
        ];
    }
}
