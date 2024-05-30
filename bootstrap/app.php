<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\HandleInertiaRequests;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            HandleInertiaRequests::class,
        ]);

         // Add middleware to the 'api' group
        $middleware->api(append: [
            // Your API middleware class(es) here
        ]);

        //this prevents 419 expired when logout without token, no csrf token need in except
        $middleware->validateCsrfTokens(except: [
            // 'stripe/*',
            // 'http://example.com/foo/bar',
            // 'http://example.com/foo/*',
            '/logout'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
