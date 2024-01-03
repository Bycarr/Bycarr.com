<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Traits\Imageable;

class Product extends Model implements Auditable
{
    use HasFactory, SoftDeletes, ModelTrait, \OwenIt\Auditing\Auditable;
    use Sluggable, Imageable;

    protected $table = 'products';
    protected $dateFormat = 'Y-m-d H:i:s.u';

    protected $fillable = [
        'uuid', 'product_category_id', 'product_model_id', 'product_brand_id', 'code', 'agent_id', 'city_id',
        'price', 'discount', 'discount_amount', 'is_verified', 'title', 'slug', 'excerpt', 'description',
        'image', 'status', 'stock_status', 'display_order', 'created_by', 'updated_by', 'verified_by', 'verified_date',
        'quantity','delivery','negotiable'
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    protected $dates = [
        'verified_date'
    ];
    public function scopeIsActive($query)
    {
        return $query->where('status',1);
    }
    public function scopeIsVerified($query)
    {
        return $query->where('is_verified',1);
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
    public function verifiedBy()
    {
        return $this->belongsTo(User::class, 'verified_by');
    }
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }
    public function model()
    {
        return $this->belongsTo(ProductModel::class, 'product_model_id');
    }
    public function brand()
    {
        return $this->belongsTo(ProductBrand::class, 'product_brand_id');
    }
    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_id');
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class, 'product_id', 'id');
    }
}
