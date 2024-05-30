<?php

namespace ChrisReedIO\PubRecSDK;

use ChrisReedIO\PubRecSDK\Commands\PubRecSDKCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
