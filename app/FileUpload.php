<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    protected $table = 'file_uploads';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $fillable =[
      'images','phone'
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
}
