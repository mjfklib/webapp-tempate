<?php

declare(strict_types=1);

namespace WebApp;

use mjfklib\Container\DefinitionSource;
use mjfklib\Container\Env;

class WebAppDefinitionSource extends DefinitionSource
{
    /**
     * @inheritdoc
     */
    protected function createDefinitions(Env $env): array
    {
        return [];
    }


    /**
     * @inheritdoc
     */
    public function getSources(): array
    {
        return [];
    }
}
