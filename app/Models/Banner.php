<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use App\Traits\ModelTrait;
use Cviebrock\EloquentSluggable\Sluggable;

class Banner extends Model implements Auditable
{
    use HasFactory, SoftDeletes, ModelTrait, \OwenIt\Auditing\Auditable;
    use Sluggable;
    protected $table = 'banners';
    protected $dateFormat = 'Y-m-d H:i:s.u';

    protected $fillable = [
        'uuid', 'title', 'slug', 'image', 'link_url', 'link_text', 'is_external', 'excerpt', 'description', 'status', 'display_order', 'created_by', 'updated_by'
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
