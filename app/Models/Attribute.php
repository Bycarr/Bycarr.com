<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Traits\ModelTrait;
use OwenIt\Auditing\Contracts\Auditable;

class Attribute extends Model implements Auditable
{
    use HasFactory, SoftDeletes, Sluggable, ModelTrait, \OwenIt\Auditing\Auditable;
    protected $fillable = [
        'title', 'uuid',
        'slug', 'type', 'icon',
        'options', 'show_in_filter', 'status',
        'created_by', 'updated_by'
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'separator' => '_'
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
