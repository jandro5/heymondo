<?php

namespace App\Services\Ecommerce\Features;

use App\Domains\Supplier\Jobs\ListSupplierJob;
use Illuminate\Http\Request;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

class ListSupplierFeature extends Feature
{
    public function handle(Request $request)
    {
        $suppliers = $this->run(new ListSupplierJob());
        
        return $this->run(new RespondWithJsonJob($suppliers));
    }
}
