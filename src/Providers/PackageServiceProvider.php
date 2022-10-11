<?php

namespace Kalitvyan\Enums\Providers;

use Illuminate\Support\ServiceProvider;
use Kalitvyan\Enums\Console\Commands\LocalizedEnumMakeCommand;

final class PackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                commands: [
                    LocalizedEnumMakeCommand::class,
                ],
            );
        }
    }
}
