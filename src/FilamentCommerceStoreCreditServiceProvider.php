<?php

namespace JeffersonGoncalves\FilamentCommerce\StoreCredit;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommerceStoreCreditServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-store-credit';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
