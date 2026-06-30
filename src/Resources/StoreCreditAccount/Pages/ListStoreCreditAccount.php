<?php

namespace JeffersonGoncalves\FilamentCommerce\StoreCredit\Resources\StoreCreditAccount\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentCommerce\StoreCredit\Resources\StoreCreditAccount\StoreCreditAccountResource;

class ListStoreCreditAccount extends ListRecords
{
    protected static string $resource = StoreCreditAccountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
