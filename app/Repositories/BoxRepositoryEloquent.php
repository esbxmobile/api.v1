<?php

namespace Api\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Api\Repositories\BoxRepository;
use Api\Models\Box;
use Api\Validators\BoxValidator;

/**
 * Class BoxRepositoryEloquent
 * @package namespace App\Repositories;
 */
class BoxRepositoryEloquent extends BaseRepository implements BoxRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Box::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
