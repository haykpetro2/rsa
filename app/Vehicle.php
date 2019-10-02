<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{

    use SoftDeletes;

    protected $dates = [
        'dk_date',
    ];

    protected $fillable = [
        'type',
        'make',
        'model',
        'year',
        'power',
        'trailer',
        'sign',
        'vin',
        'document_name',
        'document_serial',
        'document_number',
        'dk_number',
        'dk_date',
    ];

    protected $visible = [
        'type',
        'make',
        'model',
        'year',
        'power',
        'trailer',
        'sign',
        'vin',
        'document_name',
        'document_serial',
        'document_number',
        'dk_number',
        'dk_date',
    ];

    public function client() {
        return $this->belongsTo('App\Client');
    }
    public function getTitleAttribute()
    {
        return($this->make . " " . $this->model . ", " . $this->year . " (" . $this->power . ")");
    }
    public function getDkDateAttribute($value)
    {
        if (strlen($value)) {
            return Carbon::parse($value)->format('d.m.Y');
        } else {
            return null;
        }
    }
    public function setDkDateAttribute($value)
    {
        if (strlen($value)) {
            $this->attributes['dk_date'] = Carbon::createFromFormat('d.m.Y', $value);
        } else {
            $this->attributes['dk_date'] = null;
        }
    }

    public static function getMakeOptionsForSelect()
    {
        $vehicle_makers = Vehicle::select('make')->groupBy('make')->get()->toArray();
        $makers = [];
        foreach ($vehicle_makers as $name){
            $makers[trim($name['make'])] = trim($name['make']);
        }
        return $makers;
    }
}
