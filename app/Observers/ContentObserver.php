<?php

namespace App\Observers;

use App\Models\Content;
use Illuminate\Support\Str;

class ContentObserver
{
    /**
     * Handle the Content "creating" event.
     *
     * @param  \App\Models\Content  $content
     * @return void
     */
    public function creating(Content $content)
    {
        $content->uuid = Str::uuid();
    }
    /**
     * Handle the Content "created" event.
     *
     * @param  \App\Models\Content  $content
     * @return void
     */
    public function created(Content $content)
    {
        //
    }

    /**
     * Handle the Content "updated" event.
     *
     * @param  \App\Models\Content  $content
     * @return void
     */
    public function updated(Content $content)
    {
        //
    }

    /**
     * Handle the Content "deleted" event.
     *
     * @param  \App\Models\Content  $content
     * @return void
     */
    public function deleted(Content $content)
    {
        //
    }

    /**
     * Handle the Content "restored" event.
     *
     * @param  \App\Models\Content  $content
     * @return void
     */
    public function restored(Content $content)
    {
        //
    }

    /**
     * Handle the Content "force deleted" event.
     *
     * @param  \App\Models\Content  $content
     * @return void
     */
    public function forceDeleted(Content $content)
    {
        //
    }
}
