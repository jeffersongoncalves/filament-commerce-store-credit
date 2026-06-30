<?php

use JeffersonGoncalves\Commerce\StoreCredit\Models\StoreCreditAccount;
use JeffersonGoncalves\FilamentCommerce\StoreCredit\Resources\StoreCreditAccount\Pages\CreateStoreCreditAccount;
use JeffersonGoncalves\FilamentCommerce\StoreCredit\Resources\StoreCreditAccount\Pages\ListStoreCreditAccount;
use Livewire\Livewire;

it('renders the store-credit list page', function () {
    StoreCreditAccount::factory()->count(2)->create();

    Livewire::test(ListStoreCreditAccount::class)->assertOk();
});

it('creates a store-credit record through the panel', function () {
    Livewire::test(CreateStoreCreditAccount::class)
        ->fillForm([
            'customer_id' => 'cus_1',
            'currency_code' => 'usd',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(StoreCreditAccount::query()->count())->toBe(1);
});
