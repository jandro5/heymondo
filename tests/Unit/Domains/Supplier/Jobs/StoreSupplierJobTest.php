<?php

namespace Tests\Unit\Domains\Supplier\Jobs;

use App\Data\Models\Supplier;
use Tests\TestCase;
use App\Domains\Supplier\Jobs\StoreSupplierJob;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StoreSupplierJobTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_store_supplier_job()
    {
        $supplier = Supplier::factory()->make();

        $job = new StoreSupplierJob($supplier->name, $supplier->cif);

        $job->handle();

        $this->assertDatabaseHas('suppliers', [
            'name' => $supplier->name,
            'cif' => $supplier->cif,
        ]);
    }
}
