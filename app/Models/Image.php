<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'file',
        'imageable_type',
        'imageable_id',
    ];
    protected $casts = [
        'id' => 'integer',
        'imageable_id' => 'integer',
    ];

    public function imageable()
    {
        return $this->morphTo();
    }
}
