<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderStatus extends Model
{
//    use SoftDeletes;

    const STATUS_NEW = 1;
    const STATUS_PROGRESS = 2;
    const STATUS_FINISHED = 3;
    const STATUS_DECLINED = 4;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
