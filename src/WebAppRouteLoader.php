<?php

declare(strict_types=1);

namespace WebApp;

use mjfklib\WebApp\Route\RouteLoader;
use mjfklib\WebApp\WebAppConfig;
use Slim\App;

class WebAppRouteLoader implements RouteLoader
{
    /**
     * @inheritdoc
     */
    public function load(
        WebAppConfig $config,
        App $app
    ): void {
        $app->setBasePath($config->basePath);
        $app->get('/phpinfo', [PhpInfoController::class, 'phpinfo']);
    }
}
