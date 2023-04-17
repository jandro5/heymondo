<?php

namespace App\Services\Ecommerce\Features;

use App\Domains\Ecommerce\Jobs\ListShopHighestSalesJob;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

class ListShopsHighestSalesFeature extends Feature
{
    public function handle()
    {
        $users = $this->run(new ListShopHighestSalesJob());
        
        return $this->run(new RespondWithJsonJob($users));
    }
}
