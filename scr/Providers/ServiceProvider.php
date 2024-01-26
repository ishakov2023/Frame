<?php

namespace App\Providers;

use App\HelloWorld\HelloWorld;
use DI\ContainerBuilder;

class ServiceProvider
{
    public function __invoke(ContainerBuilder $builder): void
    {
        $builder->addDefinitions([
            HelloWorld::class => function () {
                return new HelloWorld('Jonn');
            },
        ]);
    }
}
