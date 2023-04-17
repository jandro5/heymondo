<?php

namespace Tests\Feature\Services\Ecommerce;

use App\Data\Models\Supplier;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListSupplierFeatureTest extends TestCase
{
    use RefreshDatabase;

    public function test_list_supplier_feature()
    {
        // persist
        Supplier::factory(10)->create();

        // request
        $response = $this->get(route('ecommerce.suppliers.list'));
        $response->assertStatus(200)
            ->assertJson([
                'data' => true
            ]);
    }
}
