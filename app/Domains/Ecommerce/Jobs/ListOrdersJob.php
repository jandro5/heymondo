<?php

namespace App\Domains\Ecommerce\Jobs;

use App\Data\Models\Shop;
use Lucid\Units\Job;

class ListOrdersJob extends Job
{
    private $id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $id = null)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $id = $this->id;

        $shops = Shop::with('orders');

        if ($id) {
            $shops->where('id', $id);
        }

        return $shops->get();
    }
}
