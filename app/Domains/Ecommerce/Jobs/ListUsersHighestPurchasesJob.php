<?php

namespace App\Domains\Ecommerce\Jobs;

use App\Models\User;
use Lucid\Units\Job;

class ListUsersHighestPurchasesJob extends Job
{
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return User::withCount('orders')
            ->orderByDesc('orders_count')
            ->get();
    }
}
