<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'mobile', 'phone', 'email', 'password',
        'email_verified_at', 'mobile_verified_at', 'status', 'image', 'login_by', 'social_unique_id',
        'referral_code', 'referred_by'
    ];
    public function scopeIsActive($query)
    {
        return $query->where('status',1);
    }
    public function getFullnameAttribute()
    {
        return $this->first_name .' '.$this->middle_name. ' '.$this->last_name;
    }
}
