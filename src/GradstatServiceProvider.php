<?php

namespace Uutkukorkmaz\Gradstat;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GradstatServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('gradstat')
            ->hasConfigFile()
            ->hasMigration('create_gradstat_table');
    }
}
