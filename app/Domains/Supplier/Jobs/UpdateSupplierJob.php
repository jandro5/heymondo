<?php

namespace App\Domains\Supplier\Jobs;

use App\Data\Models\Supplier;
use Lucid\Units\Job;

class UpdateSupplierJob extends Job
{
    private int $id;
    private string $name;
    private string $cif;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $id, $name, $cif)
    {
        $this->id = $id;
        $this->name = $name;
        $this->cif = $cif;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $attributes = [
            'name' => $this->name,
            'cif' => $this->cif,
        ];

        $supplier = Supplier::findOrFail($this->id);

        return tap($supplier)->update($attributes);
    }
}
