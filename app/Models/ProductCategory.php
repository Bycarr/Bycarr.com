<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use Cviebrock\EloquentSluggable\Sluggable;

class ProductCategory extends Model implements Auditable
{
    use HasFactory, SoftDeletes, ModelTrait, \OwenIt\Auditing\Auditable;
    use Sluggable;

    protected $table = 'product_categories';
    protected $dateFormat = 'Y-m-d H:i:s.u';

    protected $fillable = [
        'uuid', 'title', 'slug', 'description', 'image', 'status', 'display_order', 'created_by', 'updated_by'
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
    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, ProductCategoryAttribute::class, 'product_category_id', 'attribute_id');
    }
}
