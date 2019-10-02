<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
//	use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'name',
		'email',
		'phone',
		'comment',
		'status_id',
		'type_id',
		'fields',
		'notes',
		'delivery',
    ];

    public function status() {
        return $this->belongsTo('App\OrderStatus', 'status_id');
    }
    public function type(){
        return $this->belongsTo('App\OrderType', 'type_id');
    }
    public function isOsago(){
        return $this->type_id == OrderType::TYPE_OSAGO;
    }
    public function isKasko(){
        return $this->type_id == OrderType::TYPE_KASKO;
    }
    public function isTo(){
        return $this->type_id == OrderType::TYPE_TO;
    }
    public function isTravel(){
        return $this->type_id == OrderType::TYPE_TRAVEL;
    }
    public function isEstate(){
        return $this->type_id == OrderType::TYPE_ESTATE;
    }
}
