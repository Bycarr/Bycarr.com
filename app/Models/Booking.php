<?php

namespace App\Models;

use App\Helpers\ConstantHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Booking extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;
    use SoftDeletes;
    protected $table = 'bookings';
    protected $dateFormat = 'Y-m-d H:i:s.u';

    protected $fillable = [
        'uuid', 'code',
        'customer_id', 'product_id',
        'agent_id', 'status', 'full_name', 'mobile',
        'email', 'address', 'city', 'postal_code', 'additional_info',
        'payment_status', 'payment_method', 'online_trxn_id', 'price', 'discount',
        'paid_amount',
        'total_amount', 'has_delivery'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function scopeIsBooked($query)
    {
        return $query->where('status', '<>', ConstantHelper::BOOKING_STATUS_INITIATE);
    }
    public function logs()
    {
        return $this->hasMany(BookingLog::class, 'booking_id', 'uuid');
    }
}
