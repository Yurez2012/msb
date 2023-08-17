<?php

namespace App\Services\MyServiceBook\Features\CarFind;

use App\Domains\Car\Jobs\AttachCarToUserJob;
use App\Domains\Car\Jobs\CreateCarJob;
use App\Domains\Car\Jobs\GetCarByVinCodeJob;
use App\Domains\CarUser\Jobs\PrepareDataCarApiJob;
use App\Domains\CarUser\Jobs\ShowCarFindByApiJob;
use App\Domains\Http\Jobs\RespondWithJsonJob;
use Illuminate\Http\Response;
use Lucid\Units\Feature;

class ShowCarFindFeature extends Feature
{
    public function __construct(public string $vincode)
    {
    }

    public function handle()
    {
        $car = $this->run(new GetCarByVinCodeJob($this->vincode));

        if (!$car) {
            $data           = $this->run(new ShowCarFindByApiJob($this->vincode));
            $carPrepareData = $this->run(new PrepareDataCarApiJob($data));
            $car = $this->run(new CreateCarJob($carPrepareData));
        }

        $this->run(new AttachCarToUserJob($car));

        return $this->run(new RespondWithJsonJob($car->toArray(), Response::HTTP_OK));
    }
}
