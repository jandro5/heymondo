<?php

namespace App\Services\Ecommerce\Http\Controllers;

use App\Services\Ecommerce\Features\DestroySupplierFeature;
use App\Services\Ecommerce\Features\ListSupplierFeature;
use App\Services\Ecommerce\Features\StoreSupplierFeature;
use App\Services\Ecommerce\Features\UpdateSupplierFeature;
use Lucid\Units\Controller;

class SupplierController extends Controller
{
    public function store()
    {
        return $this->serve(StoreSupplierFeature::class);
    }

    public function update($id)
    {
        return $this->serve(UpdateSupplierFeature::class, ['id' => $id]);
    }

    public function destroy($id)
    {
        return $this->serve(DestroySupplierFeature::class, ['id' => $id]);
    }

    public function list()
    {
        return $this->serve(ListSupplierFeature::class);
    }
}
