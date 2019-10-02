<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderType extends Model
{
//    use SoftDeletes;

    const TYPE_OSAGO = 1;
    const TYPE_KASKO = 2;
    const TYPE_TO = 3;
    const TYPE_TRAVEL = 4;
    const TYPE_ESTATE = 5;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
