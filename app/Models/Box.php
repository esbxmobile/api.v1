<?php

namespace Api\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Box extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'is_available',
        'is_covered',
        'is_prebook',
        'is_routine',
        'has_priceday',
        'price_hour',
        'price_day',
        'price_month',
        'price_routine',
        'size',
        'lat',
        'long',
        'street',
        'district',
        'city',
        'country',
        'number',
        'zipcode'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function photoBox(){
        return $this->hasMany(PhotoBox::class);
    }


}
