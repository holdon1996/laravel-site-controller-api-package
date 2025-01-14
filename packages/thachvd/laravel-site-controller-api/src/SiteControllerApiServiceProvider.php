<?php

namespace ThachVd\LaravelSiteControllerApi;

use Illuminate\Support\ServiceProvider;
use ThachVd\LaravelSiteControllerApi\Console\Commands\ScApiGenerateModels;

class SiteControllerApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        //$this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        //$this->loadMigrationsFrom(__DIR__.'/database/migrations');
        if ($this->app->runningInConsole()) {
            // publish migration
            $publishedDatabasePaths = [
                __DIR__.'/database/migrations/2025_01_08_000000_create_sc_api_logs_table.php' => database_path('migrations/2025_01_08_000000_create_sc_api_logs_table.php'),
                __DIR__.'/database/migrations/2025_01_10_035552_create_sc_tllincoln_soap_api_logs_table.php' => database_path('migrations/2025_01_10_035552_create_sc_tllincoln_soap_api_logs_table.php'),
            ];
            foreach ($publishedDatabasePaths as $packageDatabasePath => $publishedDatabasePath) {
                if (!file_exists($publishedDatabasePath)) {
                    $this->publishes([
                        $packageDatabasePath => $publishedDatabasePath,
                    ], 'sc-api-migrations');
                }
            }

            // publish model
            $publishedModelPaths = [
                __DIR__.'/Models/ScApiLog.php' => app_path('Models/ScApiLog.php'),
                __DIR__.'/Models/ScTlLincolnSoapApiLog.php' => app_path('Models/ScTlLincolnSoapApiLog.php'),
            ];
            foreach ($publishedModelPaths as $packageModelPath => $publishedModelsPath) {
                if (!file_exists($publishedModelsPath)) {
                    $this->publishes([
                        $packageModelPath => $publishedModelsPath,
                    ], 'sc-api-models');
                }
            }


            // publish routes
            $publishedRoutesPath = base_path('routes/sc.php');
            if (!file_exists($publishedRoutesPath)) {
                $this->publishes([
                    __DIR__ . '/routes/sc.php' => base_path('routes/sc.php'),
                ], 'sc-api-routes');
            }

            // publish controllers
            $publishedControllersPath = app_path('Http/Controllers/Sc/TlLincolnController.php');
            if (!file_exists($publishedControllersPath)) {
                $this->publishes([
                    __DIR__ . '/Controllers/Sc' => app_path('Http/Controllers/Sc'),
                ], 'sc-api-controllers');
            }

            // publish services
            $publishedServicesPath = app_path('Services/Sc');
            if (!file_exists($publishedServicesPath)) {
                $this->publishes([
                    __DIR__ . '/Services/Sc' => app_path('Services/Sc'),
                ], 'sc-api-services');
            }

            // publish services
            $publishedConfigsPath = config_path('sc.php');
            if (!file_exists($publishedConfigsPath)) {
                $this->publishes([
                    __DIR__ . '/configs/sc.php' => config_path('sc.php'),
                ], 'sc-api-configs');
            }

            // load routes
            //if (file_exists($publishedRoutesPath)) {
            //    echo "load routes from $publishedRoutesPath\n";
            //    $this->loadRoutesFrom($publishedRoutesPath);
            //}
            //
            //$this->commands([
            //    ScApiGenerateModels::class,
            //]);
        }
    }
}
