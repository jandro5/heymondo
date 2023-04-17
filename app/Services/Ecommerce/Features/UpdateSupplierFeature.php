<?php

namespace App\Services\Ecommerce\Features;

use App\Domains\Supplier\Jobs\UpdateSupplierJob;
use Illuminate\Http\Request;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

class UpdateSupplierFeature extends Feature
{
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function handle(Request $request)
    {
        $supplier = $this->run(new UpdateSupplierJob(
            $this->id,
            $request->input('name'),
            $request->input('cif')
        ));

        return $this->run(new RespondWithJsonJob($supplier));
    }
}
