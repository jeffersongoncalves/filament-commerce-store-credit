<?php

namespace JeffersonGoncalves\FilamentCommerce\StoreCredit\Concerns;

use JeffersonGoncalves\FilamentCommerce\Core\Concerns\HasCommercePluginConfig;

trait HasCommerceStoreCreditPluginConfig
{
    use HasCommercePluginConfig;

    protected function getConfigKey(): string
    {
        return 'filament-commerce-store-credit';
    }

    protected function getDefaultNavigationGroup(): string
    {
        return 'Commerce — Growth';
    }
}
