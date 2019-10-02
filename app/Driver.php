<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{

    use SoftDeletes;

    protected $dates = ['date_birth', 'created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'name',
        'date_birth',
        'kbm',
        'exp',
        'driver_license',
    ];

    public function client() {
        return $this->belongsTo('App\Client');
    }
    public function policies(){
        return $this->belongsToMany('App\Policy');
    }
    public function getDateBirthAttribute($value)
    {
        if (strlen($value)) {
            return Carbon::parse($value)->format('d.m.Y');
        } else {
            return null;
        }
    }
    public function setDateBirthAttribute($value)
    {
        if (strlen($value)) {
            $this->attributes['date_birth'] = Carbon::createFromFormat('d.m.Y', $value);
        } else {
            $this->attributes['date_birth'] = null;
        }
    }
    public function getKbmAttribute($value)
    {
        if (strlen($value)) {
            return number_format($value, 2, '.', '');
        } else {
            return '';
        }
    }
}
