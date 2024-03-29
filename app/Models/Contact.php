<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Contact extends Model implements Auditable
{
    use HasFactory, SoftDeletes, \OwenIt\Auditing\Auditable;

    protected $table = 'contacts';
    protected $dateFormat = 'Y-m-d H:i:s.u';
    protected $fillable = [
        'full_name', 'email', 'contact', 'company', 'address', 'queries'
    ];
}
