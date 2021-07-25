<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Magic Links.
 *
 * (c) Konceiver <info@konceiver.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Konceiver\MagicLinks\Providers;

use Illuminate\Support\ServiceProvider;

final class MagicLinkServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/magic-link.php', 'magic-link');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/magic-link.php' => $this->app->configPath('magic-link.php'),
            ], 'magic-link-config');
        }

        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
    }
}
