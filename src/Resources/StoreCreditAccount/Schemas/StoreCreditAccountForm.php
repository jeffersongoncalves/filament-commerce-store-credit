<?php

namespace JeffersonGoncalves\FilamentCommerce\StoreCredit\Resources\StoreCreditAccount\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class StoreCreditAccountForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('customer_id'),
                        TextInput::make('currency_code'),
                    ])->columns(2),
            ]);
    }
}
