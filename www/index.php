<?php

declare(strict_types=1);

define("APP_DIR", __DIR__ . "/..");
define("APP_NAMESPACE", "\\WebApp");
define("APP_NAME", "web-app");

require_once APP_DIR . "/vendor/autoload.php";

\mjfklib\WebApp\WebAppInvoker::run(
    appDir: APP_DIR,
    appNamespace: APP_NAMESPACE,
    appName: APP_NAME
);
