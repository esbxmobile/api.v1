<?php

namespace Api\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class PhotoBox extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'path'
    ];

    public function box(){
        return $this->belongsTo(Box::class);
    }

}
