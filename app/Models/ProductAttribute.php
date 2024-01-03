<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ProductAttribute extends Model implements Auditable
{
    use HasFactory, ModelTrait, \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'product_id', 'key', 'value', 'created_by', 'updated_by'
    ];
    public function attribute(){
        return $this->belongsTo(Attribute::class,'key','slug');
    }
}
