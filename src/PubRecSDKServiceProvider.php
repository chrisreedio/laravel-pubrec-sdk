<?php

namespace ChrisReedIO\PubRecSDK;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ChrisReedIO\PubRecSDK\Commands\PubRecSDKCommand;

class PubRecSDKServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-pubrec-sdk')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-pubrec-sdk_table')
            ->hasCommand(PubRecSDKCommand::class);
    }
}
