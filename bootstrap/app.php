<?php

use App\Http\Middleware\Is_admin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
<<<<<<< HEAD
        $middleware->alias([
=======
         $middleware->alias([
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
'is_admin'=>Is_admin::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
