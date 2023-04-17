<?php

namespace App\Services\Ecommerce\Features;

use App\Domains\Ecommerce\Jobs\ListOrdersJob;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

class ListOrdersFeature extends Feature
{
    private $id;

    public function __construct(string $id = null)
    {
        $this->id = $id;
    }

    public function handle()
    {
        $orders = $this->run(new ListOrdersJob(
            $this->id
        ));

        return $this->run(new RespondWithJsonJob($orders));
    }
}
