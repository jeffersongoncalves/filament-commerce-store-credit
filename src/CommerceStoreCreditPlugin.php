<?php

namespace JeffersonGoncalves\FilamentCommerce\StoreCredit;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\StoreCredit\Concerns\HasCommerceStoreCreditPluginConfig;
use JeffersonGoncalves\FilamentCommerce\StoreCredit\Resources\StoreCreditAccount\StoreCreditAccountResource;

class CommerceStoreCreditPlugin implements Plugin
{
    use HasCommerceStoreCreditPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-store-credit';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'store-credit' => StoreCreditAccountResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
