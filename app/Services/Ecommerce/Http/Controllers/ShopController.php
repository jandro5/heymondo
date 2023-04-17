<?php

namespace App\Services\Ecommerce\Http\Controllers;

use App\Services\Ecommerce\Features\ListShopsHighestSalesFeature;
use Lucid\Units\Controller;

class ShopController extends Controller
{
    public function listShopsHighestSales()
    {
        return $this->serve(ListShopsHighestSalesFeature::class);
    }
}
