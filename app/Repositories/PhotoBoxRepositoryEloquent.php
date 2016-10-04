<?php

namespace Api\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Api\Repositories\PhotoBoxRepository;
use Api\Models\PhotoBox;
use Api\Validators\PhotoBoxValidator;

/**
 * Class PhotoBoxRepositoryEloquent
 * @package namespace App\Repositories;
 */
class PhotoBoxRepositoryEloquent extends BaseRepository implements PhotoBoxRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return PhotoBox::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
