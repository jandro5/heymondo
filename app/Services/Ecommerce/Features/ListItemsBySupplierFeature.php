<?php

namespace App\Services\Ecommerce\Features;

use App\Domains\Ecommerce\Jobs\ListItemsBySupplierJob;
use Illuminate\Http\Request;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

class ListItemsBySupplierFeature extends Feature
{
    private $id;

    public function __construct(string $id = null)
    {
        $this->id = $id;
    }

    public function handle()
    {
        $suppliers = $this->run(new ListItemsBySupplierJob(
            $this->id
        ));

        return $this->run(new RespondWithJsonJob($suppliers));
    }
}
