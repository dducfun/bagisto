<?php

namespace Webkul\Afun\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Webkul\Afun\Models\Products::class,
    ];
}
