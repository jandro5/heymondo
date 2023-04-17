<?php

namespace Tests\Unit\Domains\Supplier\Jobs;

use App\Data\Models\Supplier;
use Tests\TestCase;
use App\Domains\Supplier\Jobs\UpdateSupplierJob;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateSupplierJobTest extends TestCase
{
    use RefreshDatabase;

    public function test_update_supplier_job()
    {
        $supplierStore = Supplier::factory()->create();

        $this->assertDatabaseCount('suppliers', 1);

        $supplier = Supplier::factory()->make();

        $job = new UpdateSupplierJob($supplierStore->id, $supplier->name, $supplier->cif);

        $job->handle();

        $this->assertDatabaseHas('suppliers', [
            'id' => $supplierStore->id,
            'name' => $supplier->name,
            'cif' => $supplier->cif,
        ]);
    }
}
