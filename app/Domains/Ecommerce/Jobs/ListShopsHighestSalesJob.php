<?php

namespace App\Domains\Ecommerce\Jobs;

use App\Data\Models\Shop;
use Lucid\Units\Job;

class ListShopHighestSalesJob extends Job
{
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return Shop::withCount('orders')
            ->orderByDesc('orders_count')
            ->get();
    }
}
