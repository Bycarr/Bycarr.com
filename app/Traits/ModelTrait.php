<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait ModelTrait
{
    public static function bootModelTrait()
    {
        static::creating(function ($model) {
            if (auth()->check()) {
                $model->created_by = $model->created_by == null ? Auth::user()->id : $model->created_by;
                $model->updated_by = $model->updated_by == null ? Auth::user()->id : $model->updated_by;
            }
        });

        static::updating(function ($model) {
            if (auth()->check()) {
                $model->updated_by = $model->updated_by;
            }
        });
    }
}
