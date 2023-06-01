<?php

namespace Vinevax\ModularLaravel;

use Illuminate\Support\ServiceProvider;
use Vinevax\ModularLaravel\Commands\CreateModuleCommand;
use Vinevax\ModularLaravel\Commands\InstallModulePackageCommand;

class ModularLaravelServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/modules.php' => config_path('modules.php'),
        ]);
    }

    public function register(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallModulePackageCommand::class,
                CreateModuleCommand::class,
            ]);
        }

        $this->mergeConfigFrom(
            __DIR__ . '/../config/modules.php', 'modules'
        );
    }
}
