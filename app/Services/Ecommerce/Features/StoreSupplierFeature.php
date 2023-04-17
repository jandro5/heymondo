<?php

namespace App\Services\Ecommerce\Features;

use App\Domains\Supplier\Jobs\StoreSupplierJob;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Illuminate\Http\Request;
use Lucid\Units\Feature;

class StoreSupplierFeature extends Feature
{
    public function handle(Request $request)
    {
        $supplier = $this->run(new StoreSupplierJob(
            $request->input('name'),
            $request->input('cif')
        ));

        return $this->run(new RespondWithJsonJob($supplier));
    }
}
