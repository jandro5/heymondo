<?php

namespace Tests\Feature\Services\Ecommerce;

use App\Data\Models\Supplier;
use Tests\TestCase;
use App\Services\Ecommerce\Features\StoreSupplierFeature;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StoreSupplierFeatureTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_supplier_feature()
    {
        $supplier = Supplier::factory()->make();

        // request
        $response = $this->post(route('ecommerce.suppliers.store'), $supplier->toArray());
        $response->assertStatus(200)
            ->assertJson([
                'data' => true
            ]);
    }
}
