<?php

namespace Tests\Feature\Services\Ecommerce;

use App\Data\Models\Supplier;
use Tests\TestCase;
use App\Services\Ecommerce\Features\UpdateSupplierFeature;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateSupplierFeatureTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_update_supplier_feature()
    {
        // persist
        $supplier = Supplier::factory()->create();

        $supplierToEdit = Supplier::factory()->make();

        // request
        $response = $this->put(route('ecommerce.suppliers.update', $supplier->id), $supplierToEdit->toArray());
        $response->assertStatus(200)
            ->assertJson([
                'data' => true
            ]);
    }
}
