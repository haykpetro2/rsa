<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Policy extends Model
{
//    use SoftDeletes;

    protected static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $model->created_by = \Auth::user()->id;
        });
        static::deleting(function($policy) {
            $policy->policy_number = $policy->policy_number."_deleted";
            $policy->save();
        });
    }

    public function scopeByUser($query)
    {
        $user = \Auth::user();
        if($user && $user->isManager()){
            return $query->where('policies.created_by', $user->id);
        }
        return $query;
    }

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'date_from',
        'date_to',
        'date_birth',
        'sign_date',
        'data_oformleniya',
        'srok_deystviya'
    ];

    protected $casts = [
        'same_client_owner' => 'boolean',
        'unrestricted' => 'boolean',
        'exported' => 'boolean',
        'owner_company' => 'boolean',
        'notified' => 'boolean',
    ];

    protected $fillable = [
        'time_from',
        'date_from',
        'time_to',
        'date_to',
        'sign_date',
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
        'same_client_owner',
        'unrestricted',
        'p_base',
        'p_k1',
        'p_k2',
        'p_k3',
        'p_k4',
        'p_k5',
        'p_k6',
        'p_k7',
        'p_k8',
        'p_total',
        'policy_serial',
        'policy_number',
        'receipt_number',
        'images',
        'files',
        'driver_type',
        'company_id',
        'company_name',
        'owner_company',
        'owner_company_name',
        'owner_company_inn',
        't_amount',
        'f_amount',
        'agent_name',
    ];

    public function getDateFromAttribute($value)
    {
        if (strlen($value)) {
            return Carbon::parse($value)->format('d.m.Y');
        } else {
            return null;
        }
    }
    public function setDateFromAttribute($value)
    {
        if (strlen($value)) {
            $this->attributes['date_from'] = Carbon::createFromFormat('d.m.Y', $value);
        } else {
            $this->attributes['date_from'] = null;
        }
    }
    public function getDateToAttribute($value)
    {
        if (strlen($value)) {
            return Carbon::parse($value)->format('d.m.Y');
        } else {
            return null;
        }
    }
    public function setDateToAttribute($value)
    {
        if (strlen($value)) {
            $this->attributes['date_to'] = Carbon::createFromFormat('d.m.Y', $value);
        } else {
            $this->attributes['date_to'] = null;
        }
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

    public function getSignDateAttribute($value)
    {
        if (strlen($value)) {
            return Carbon::parse($value)->format('d.m.Y');
        } else {
            return '';
        }
    }
    public function setSignDateAttribute($value)
    {
        if (strlen($value)) {
            $this->attributes['sign_date'] = Carbon::createFromFormat('d.m.Y', $value);
        } else {
            $this->attributes['sign_date'] = null;
        }
    }

    public function client() {
        return $this->belongsTo('App\Client', 'client_id');
    }
    public function vehicle(){
        return $this->belongsTo('App\Vehicle', 'vehicle_id');
    }
    public function drivers(){
        return $this->belongsToMany('App\Driver');
    }
    public function setOwnerData(Client $client){
        $this->last_name = $client->last_name;
        $this->first_name = $client->first_name;
        $this->middle_name = $client->middle_name;
        $this->date_birth = $client->date_birth;
        $this->passport_serial = $client->passport_serial;
        $this->passport_number = $client->passport_number;
        $this->full_address = $client->full_address;
        $this->full_address_json = $client->full_address_json;
        $this->cell_phone = $client->cell_phone;
        $this->email = $client->email;
        $this->notes = $client->notes;
        $this->owner_company = $client->is_company;
        $this->owner_company_name = $client->company_name;
        $this->owner_company_inn = $client->company_inn;
    }
    public function getFromStrAttribute()
    {
        return ($this->date_from . " " . $this->time_from);
    }
    public function getToStrAttribute()
    {
        return ($this->date_to . " " . $this->time_to);
    }
    public function getLegalNameAttribute()
    {
        return $this->owner_company?$this->owner_company_name:($this->last_name . " " . $this->first_name . " " . $this->middle_name);
    }
    public function getPassportFullAttribute()
    {
        return $this->owner_company?$this->owner_company_inn:($this->passport_serial . " " . $this->passport_number);
    }

    public function getPBaseAttribute($value)
    {
        if (strlen($value)) {
            return number_format($value, 2, '.', '');
        } else {
            return '';
        }
    }
    public function getPK1Attribute($value)
    {
        if (strlen($value)) {
            return number_format($value, 2, '.', '');
        } else {
            return '';
        }
    }
    public function getPK2Attribute($value)
    {
        if (strlen($value)) {
            return number_format($value, 2, '.', '');
        } else {
            return '';
        }
    }
    public function getPK3Attribute($value)
    {
        if (strlen($value)) {
            return number_format($value, 2, '.', '');
        } else {
            return '';
        }
    }
    public function getPK4Attribute($value)
    {
        if (strlen($value)) {
            return number_format($value, 2, '.', '');
        } else {
            return '';
        }
    }
    public function getPK5Attribute($value)
    {
        if (strlen($value)) {
            return number_format($value, 2, '.', '');
        } else {
            return '';
        }
    }
    public function getPK6Attribute($value)
    {
        if (strlen($value)) {
            return number_format($value, 2, '.', '');
        } else {
            return '';
        }
    }
    public function getPK7Attribute($value)
    {
        if (strlen($value)) {
            return number_format($value, 2, '.', '');
        } else {
            return '';
        }
    }
    public function getPK8Attribute($value)
    {
        if (strlen($value)) {
            return number_format($value, 2, '.', '');
        } else {
            return '';
        }
    }
    public function getPTotalAttribute($value)
    {
        if (strlen($value)) {
            return number_format($value, 2, '.', '');
        } else {
            return '';
        }
    }

    public static function getExpiringPolicies(){
        return Policy::where('date_to', '<=', Carbon::now()->addDays(60))
            ->where('date_to', '>=', Carbon::now())
            ->where('notified', 0)
            ->orderBy('date_to', 'asc')
            ->get();
    }

    public static function getCompanyOptionsForSelect()
    {
        $company_names = Policy::select('company_name')->groupBy('company_name')->get()->toArray();
        $companies = [];
        foreach ($company_names as $name){
            $companies[trim($name['company_name'])] = trim($name['company_name']);
        }
        return $companies;
    }
}
