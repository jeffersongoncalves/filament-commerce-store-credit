<?php

namespace JeffersonGoncalves\FilamentCommerce\StoreCredit\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\FilamentCommerce\StoreCredit\CommerceStoreCreditPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CommerceStoreCreditPlugin::make(),
            ]);
    }
}
