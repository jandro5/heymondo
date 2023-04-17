<?php

namespace App\Services\Ecommerce\Http\Controllers;

use App\Services\Ecommerce\Features\ListItemsBySupplierFeature;
use App\Services\Ecommerce\Features\ListItemsByShopFeature;
use Lucid\Units\Controller;

class ItemController extends Controller
{
    public function listItemsByShop($id = null)
    {
        return $this->serve(ListItemsByShopFeature::class, ['id' => $id]);
    }

    public function listItemsBySupplier($id)
    {
        return $this->serve(ListItemsBySupplierFeature::class, ['id' => $id]);
    }
}
