<?php

namespace App\Domains\Ecommerce\Jobs;

use App\Data\Models\Item;
use Lucid\Units\Job;

class ListItemsBySupplierJob extends Job
{
    private int $id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $id = $this->id;
        return Item::whereHas('suppliers', function ($query) use ($id) {
            $query->where('suppliers.id', $id);
        })
            ->get();
    }
}
