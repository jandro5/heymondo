<?php

namespace App\Services\Ecommerce\Features;

use App\Domains\Supplier\Jobs\DestroySupplierJob;
use Lucid\Domains\Http\Jobs\RespondWithJsonErrorJob;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

class DestroySupplierFeature extends Feature
{
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function handle()
    {
        $error = $this->run(new DestroySupplierJob(
            $this->id
        ));

        if ($error) {
            return $this->run(new RespondWithJsonErrorJob(
                status: 422,
                message: $error,
            ));
        }

        return $this->run(new RespondWithJsonJob('ok'));
    }
}
