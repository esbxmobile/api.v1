<?php

namespace Api\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Api\Repositories\VehicleRepository;
use Api\Models\Vehicle;
use Api\Validators\VehicleValidator;

/**
 * Class VehicleRepositoryEloquent
 * @package namespace App\Repositories;
 */
class VehicleRepositoryEloquent extends BaseRepository implements VehicleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Vehicle::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
