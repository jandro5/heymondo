<?php

namespace Tests\Unit\Domains\Supplier\Jobs;

use App\Data\Models\Supplier;
use Tests\TestCase;
use App\Domains\Supplier\Jobs\ListSupplierJob;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListSupplierJobTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_list_supplier_job()
    {
        Supplier::factory(5)->create();

        $job = new ListSupplierJob();

        $result = $job->handle();

        $this->assertInstanceOf(Collection::class, $result);
    }
}
