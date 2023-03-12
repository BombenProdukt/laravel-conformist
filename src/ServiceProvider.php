<?php

declare(strict_types=1);

namespace PreemStudio\Conformist;

use PreemStudio\Jetpack\Package\AbstractServiceProvider;
use PreemStudio\Jetpack\Package\Package;

class ServiceProvider extends AbstractServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-conformist');
    }
}
