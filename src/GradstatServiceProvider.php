<?php

namespace Uutkukorkmaz\Gradstat;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Uutkukorkmaz\Gradstat\Commands\GradstatCommand;

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
