<?php

namespace  App\Traits;

trait Imageable
{
    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
