<?php

namespace App\Services\MyServiceBook\Http\Controllers\CarFind;

use App\Services\MyServiceBook\Features\CarFind\ShowCarFindFeature;
use Lucid\Units\Controller;

class CarFindController extends Controller
{
    /**
     * @return mixed
     */
    public function show($car)
    {
        return $this->serve(ShowCarFindFeature::class, [
            'vincode' => $car,
        ]);
    }
}
