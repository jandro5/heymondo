<?php

namespace App\Services\Ecommerce\Http\Controllers;

use App\Services\Ecommerce\Features\ListOrdersFeature;
use App\Services\Ecommerce\Features\ListUsersHighestPurchasesFeature;
use Lucid\Units\Controller;

class OrderController extends Controller
{
    public function listUsersHighestPurchases()
    {
        return $this->serve(ListUsersHighestPurchasesFeature::class);
    }

    public function listOrders($id = null)
    {
        return $this->serve(ListOrdersFeature::class, ['id' => $id]);
    }
}
