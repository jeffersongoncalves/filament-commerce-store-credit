<?php

namespace JeffersonGoncalves\FilamentCommerce\StoreCredit\Resources\StoreCreditAccount\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\FilamentCommerce\StoreCredit\Resources\StoreCreditAccount\StoreCreditAccountResource;

class EditStoreCreditAccount extends EditRecord
{
    protected static string $resource = StoreCreditAccountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
