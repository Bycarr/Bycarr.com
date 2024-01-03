<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Agent extends Model implements Auditable
{
    use HasFactory;
    use SoftDeletes;
    use Sluggable, \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'uuid', 'title', 'slug',
        'image', 'contact', 'email',
        'address', 'description',
        'status',
        'display_order', 'city_id'
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
