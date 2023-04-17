<?php

namespace Tests\Unit\Domains\Supplier\Jobs;

use App\Data\Models\Supplier;
use Tests\TestCase;
use App\Domains\Supplier\Jobs\DestroySupplierJob;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DestroySupplierJobTest extends TestCase
{
    use RefreshDatabase;

    public function test_destroy_supplier_job()
    {
        $supplierStore = Supplier::factory()->create();

        $this->assertDatabaseCount('suppliers', 1);

        $job = new DestroySupplierJob($supplierStore->id);

        $job->handle();

        $this->assertDatabaseMissing('suppliers', [
            'id' => $supplierStore->id
        ]);
    }
}
