<?php

namespace Tests\Feature\Services\Ecommerce;

use App\Data\Models\Supplier;
use Tests\TestCase;
use App\Services\Ecommerce\Features\DestroySupplierFeature;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DestroySupplierFeatureTest extends TestCase
{
    use RefreshDatabase;

    public function test_destroy_supplier_feature()
    {
        // persist
        $supplier = Supplier::factory()->create();

        // request
        $response = $this->delete(route('ecommerce.suppliers.destroy', $supplier->id));
        $response->assertStatus(200)
            ->assertJson([
                'data' => true
            ]);
    }
}
