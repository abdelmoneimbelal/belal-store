<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Mindscms\Entrust\Middleware\EntrustRole;
use Mindscms\Entrust\Middleware\EntrustPermission;
use Mindscms\Entrust\Middleware\EntrustAbility;
use Mindscms\Entrust\EntrustFacade;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'Entrust'       => EntrustFacade::class,
            'role'          => EntrustRole::class,
            'permission'    => EntrustPermission::class,
            'ability'       => EntrustAbility::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
