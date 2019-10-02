<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{

    use SoftDeletes;

    protected $dates = ['date_birth', 'created_at', 'updated_at', 'deleted_at'];

    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'date_birth',
        'passport_serial',
        'passport_number',
        'full_address',
        'full_address_json',
        'cell_phone',
        'email',
        'notes',
        'images',
        'is_company',
        'company_name',
        'company_inn',
    ];

    protected $casts = [
        'is_company' => 'boolean',
    ];

    public function vehicles() {
        return $this->hasMany('App\Vehicle');
    }
    public function policies() {
        return $this->hasMany('App\Policy');
    }
    public function drivers() {
        return $this->hasMany('App\Driver');
    }
    
    protected static function boot() {
        parent::boot();

        static::creating(function ($model) {
            $model->created_by = \Auth::user()->id;
        });

        static::deleting(function($client) { // before delete() method call this
            $client->vehicles()->delete();
            $client->drivers()->delete();
            $client->policies()->delete();
        });
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

    public function getFullNameAttribute()
    {
        return $this->is_company?$this->company_name:($this->first_name . " " . $this->last_name);
    }
    public function getShortNameAttribute()
    {
        return $this->is_company?$this->company_name:($this->first_name . " " . $this->middle_name);
    }
    public function getLegalNameAttribute()
    {
        return $this->is_company?$this->company_name:($this->last_name . " " . $this->first_name . " " . $this->middle_name);
    }
    public function getPassportFullAttribute()
    {
        return($this->passport_serial . " " . $this->passport_number);
    }
    public function getTitleAttribute()
    {
        return $this->is_company?$this->company_name:$this->legal_name . " (" . $this->date_birth . ")";
    }
    public function getImagesAttribute($value)
    {
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }
    public function setImagesAttribute($images)
    {
        $this->attributes['images'] = implode(',', $images);
    }
    public function getSmsPhoneNumberAttribute(){
        return '7'.str_replace("-","",$this->cell_phone);
    }
}
