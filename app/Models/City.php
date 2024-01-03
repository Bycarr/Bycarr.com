<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use Cviebrock\EloquentSluggable\Sluggable;

class City extends Model implements Auditable
{
    use HasFactory, SoftDeletes, \OwenIt\Auditing\Auditable;
    use Sluggable;
    protected $table = 'cities';
    protected $dateFormat = 'Y-m-d H:i:s.u';

    protected $fillable = [
        'uuid', 'title', 'slug', 'province_id', 'district_id', 'latitute', 'image', 'icon', 'longitude', 'status', 'display_order', 'created_by', 'updated_by'
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
