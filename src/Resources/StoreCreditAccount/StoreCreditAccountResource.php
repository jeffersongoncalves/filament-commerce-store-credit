<?php

namespace JeffersonGoncalves\FilamentCommerce\StoreCredit\Resources\StoreCreditAccount;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\StoreCredit\Models\StoreCreditAccount;
use JeffersonGoncalves\FilamentCommerce\StoreCredit\CommerceStoreCreditPlugin;
use JeffersonGoncalves\FilamentCommerce\StoreCredit\Resources\StoreCreditAccount\Pages\CreateStoreCreditAccount;
use JeffersonGoncalves\FilamentCommerce\StoreCredit\Resources\StoreCreditAccount\Pages\EditStoreCreditAccount;
use JeffersonGoncalves\FilamentCommerce\StoreCredit\Resources\StoreCreditAccount\Pages\ListStoreCreditAccount;
use JeffersonGoncalves\FilamentCommerce\StoreCredit\Resources\StoreCreditAccount\Schemas\StoreCreditAccountForm;
use JeffersonGoncalves\FilamentCommerce\StoreCredit\Resources\StoreCreditAccount\Tables\StoreCreditAccountTable;

class StoreCreditAccountResource extends Resource
{
    protected static ?string $model = StoreCreditAccount::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommerceStoreCreditPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-store-credit.navigation_group', 'Commerce — Growth');
        }
    }

    public static function form(Form $form): Form
    {
        return StoreCreditAccountForm::configure($form);
    }

    public static function table(Table $table): Table
    {
        return StoreCreditAccountTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStoreCreditAccount::route('/'),
            'create' => CreateStoreCreditAccount::route('/create'),
            'edit' => EditStoreCreditAccount::route('/{record}/edit'),
        ];
    }
}
