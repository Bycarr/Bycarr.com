<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class BookingLog extends Model implements Auditable
{
    use HasFactory, SoftDeletes, ModelTrait, \OwenIt\Auditing\Auditable;

    protected $table = 'booking_logs';
    protected $dateFormat = 'Y-m-d H:i:s.u';
    protected $fillable = [
        'uuid', 'booking_id',
        'payment_status', 'booking_status',
        'title', 'value', 'note', 'created_by', 'updated_by',
    ];
}
