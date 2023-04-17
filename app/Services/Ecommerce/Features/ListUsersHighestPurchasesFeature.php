<?php

namespace App\Services\Ecommerce\Features;

use App\Domains\Ecommerce\Jobs\ListUsersHighestPurchasesJob;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

class ListUsersHighestPurchasesFeature extends Feature
{
    public function handle()
    {
        $users = $this->run(new ListUsersHighestPurchasesJob());
        
        return $this->run(new RespondWithJsonJob($users));
    }
}
