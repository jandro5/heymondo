<?php

namespace App\Services\Ecommerce\Features;

use App\Domains\Ecommerce\Jobs\ListItemsByShopJob;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

class ListItemsByShopFeature extends Feature
{
    private $id;

    public function __construct(string $id = null)
    {
        $this->id = $id;
    }

    public function handle()
    {
        $orders = $this->run(new ListItemsByShopJob(
            $this->id
        ));

        return $this->run(new RespondWithJsonJob($orders));
    }
}
