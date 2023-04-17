<?php

namespace App\Domains\Supplier\Jobs;

use App\Data\Models\Supplier;
use Lucid\Units\Job;

class StoreSupplierJob extends Job
{

    private string $name;
    private string $cif;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $cif)
    {
        $this->name = $name;
        $this->cif = $cif;
    }

    /**
     * Execute the job.
     *
     * @return Supplier
     */
    public function handle()
    {
        $attributes = [
            'name' => $this->name,
            'cif' => $this->cif,
        ];

        return tap(new Supplier($attributes))->save();
    }
}
