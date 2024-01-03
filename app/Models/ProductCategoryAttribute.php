<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategoryAttribute extends Model
{
    use HasFactory;

    protected $fillable = ['product_category_id', 'attribute_id'];
}
