<?php

namespace Obadadk\InlineMedia;

use Obadadk\InlineMedia\Commands\InlineMediaCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class InlineMediaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-inline-media')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-inline-media_table')
            ->hasCommand(InlineMediaCommand::class);
    }
}
