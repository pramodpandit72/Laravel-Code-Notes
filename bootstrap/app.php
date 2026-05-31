<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->append(\App\Http\Middleware\GlobalMiddleware::class); // This is for Global Middleware

        $middleware->alias(['ageCheck' =>  \App\Http\Middleware\BasicMiddleware::class]);  // This is for Route Middleware

        $middleware->group('ageGroup',[\App\Http\Middleware\GroupMiddleware::class]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {

    })->create();