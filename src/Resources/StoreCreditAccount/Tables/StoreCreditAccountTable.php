<?php

namespace JeffersonGoncalves\FilamentCommerce\StoreCredit\Resources\StoreCreditAccount\Tables;

use Filament\Actions;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StoreCreditAccountTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer_id')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('currency_code')
                    ->toggleable(),
            ])
            ->recordActions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->toolbarActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
