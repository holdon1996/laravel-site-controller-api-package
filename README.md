<h1>API Site Controller Package for Laravel</h1>

## Introduction
This package is a simple implementation of a Laravel package that helps you create a simple service Site Controller API

## Features
- Include routes for get data
- Include multiple jobs for get data
- Include postman collection for test API

## System Requirements
- Laravel 5.5 or later
- PHP 7.2 or later

## Installation
Add this config to your composer.json file
```
"repositories": [
    {
        "type": "path",
        "url": "packages/thachvd/laravel-site-controller-api"
    }
]
```
then install the package via composer:
``` composer require thachvd/laravel-site-controller-api:dev-main ```

in Laravel old version maybe you need to add service provider to config/app.php
```
'providers' => [
    ThachVd\LaravelSiteControllerApi\SiteControllerApiServiceProvider::class,
];
```
run command:
```php artisan vendor:publish --provider="ThachVd\LaravelSiteControllerApi\SiteControllerApiServiceProvider" ```

In Laravel new version, you need add this code in file config/app.php
```
then: function() {
    \Illuminate\Support\Facades\Route::middleware('api')
        ->prefix('sc')
        ->name('sc.')
        ->namespace('App\Http\Controllers\Sc')
        ->group(base_path('routes/sc.php'));
}
```
example: 
```
->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function() {
            \Illuminate\Support\Facades\Route::middleware('api')
                ->prefix('sc')
                ->name('sc.')
                ->namespace('App\Http\Controllers\Sc')
                ->group(base_path('routes/sc.php'));
        }
    )
```
In Laravel old version, you need add code to RouteServiceProvider.php
```
     Route::prefix('sc/api')
            ->middleware('api')
            ->name('sc.')
            ->namespace('App\Http\Controllers\Sc')
            ->group(base_path('routes/sc.php'));
```

run command:
```php artisan migrate ```
