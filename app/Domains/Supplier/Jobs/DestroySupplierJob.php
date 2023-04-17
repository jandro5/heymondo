<?php

namespace App\Domains\Supplier\Jobs;

use App\Data\Models\Supplier;
use Illuminate\Database\QueryException;
use Lucid\Domains\Http\Jobs\RespondWithJsonErrorJob;
use Lucid\Units\Job;

class DestroySupplierJob extends Job
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
        $supplier = Supplier::findOrFail($this->id);

        try {
            $supplier->delete();
        } catch (QueryException $e) {
            return $e->getMessage();
        }

        return null;
    }
}
