<?php

namespace Api\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Vehicle extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'id',
        'color',
        'license',
        'size',
        'type'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
