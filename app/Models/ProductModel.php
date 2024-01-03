<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use Cviebrock\EloquentSluggable\Sluggable;

class ProductModel extends Model implements Auditable
{
    use HasFactory, SoftDeletes, ModelTrait, \OwenIt\Auditing\Auditable;
    use Sluggable;

    protected $table = 'product_models';
    protected $dateFormat = 'Y-m-d H:i:s.u';

    protected $fillable = [
        'uuid','product_brand_id', 'title', 'slug', 'image', 'icon', 'description', 'status', 'display_order', 'created_by', 'updated_by'
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
