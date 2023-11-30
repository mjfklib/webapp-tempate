<?php

declare(strict_types=1);

namespace WebApp;

use mjfklib\WebApp\Error\ErrorMiddleware;
use mjfklib\WebApp\Middleware\MiddlewareFactory;
use mjfklib\WebApp\Middleware\MiddlewareLoader;
use mjfklib\WebApp\Route\RouteMiddleware;
use mjfklib\WebApp\Session\SessionMiddleware;
use Slim\App;

class WebAppMiddlewareLoader implements MiddlewareLoader
{
    /**
     * @inheritdoc
     */
    public function load(
        App $app,
        MiddlewareFactory $middlewareFactory
    ): void {
        // This should be the first middleware on the stack
        $app->addMiddleware($middlewareFactory->create(RouteMiddleware::class));

        $app->addMiddleware($middlewareFactory->create(SessionMiddleware::class));

        // This should be the last middleware on the stack
        $app->addMiddleware($middlewareFactory->create(ErrorMiddleware::class));
    }
}
