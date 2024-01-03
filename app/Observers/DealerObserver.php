<?php

namespace App\Observers;

use App\Helpers\CommonHelper;
use App\Models\Dealer;
use Illuminate\Support\Str;

class DealerObserver
{
    /**
     * Handle the Dealer "creating" event.
     *
     * @param  \App\Models\Dealer  $dealer
     * @return void
     */
    public function creating(Dealer $dealer)
    {
        $dealer->uuid = Str::uuid();
        $dealer->slug = CommonHelper::slugify($dealer->title);
    }
    /**
     * Handle the Dealer "created" event.
     *
     * @param  \App\Models\Dealer  $dealer
     * @return void
     */
    public function created(Dealer $dealer)
    {
        //
    }

    /**
     * Handle the Dealer "updated" event.
     *
     * @param  \App\Models\Dealer  $dealer
     * @return void
     */
    public function updated(Dealer $dealer)
    {
        //
    }

    /**
     * Handle the Dealer "deleted" event.
     *
     * @param  \App\Models\Dealer  $dealer
     * @return void
     */
    public function deleted(Dealer $dealer)
    {
        //
    }

    /**
     * Handle the Dealer "restored" event.
     *
     * @param  \App\Models\Dealer  $dealer
     * @return void
     */
    public function restored(Dealer $dealer)
    {
        //
    }

    /**
     * Handle the Dealer "force deleted" event.
     *
     * @param  \App\Models\Dealer  $dealer
     * @return void
     */
    public function forceDeleted(Dealer $dealer)
    {
        //
    }
}
