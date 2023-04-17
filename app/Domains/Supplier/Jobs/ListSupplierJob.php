<?php

namespace App\Domains\Supplier\Jobs;

use App\Data\Models\Supplier;
use Lucid\Units\Job;

class ListSupplierJob extends Job
{
    /**
     * Execute the job.
     *
     * @return Supplier
     */
    public function handle()
    {
        return Supplier::all();
    }
}
