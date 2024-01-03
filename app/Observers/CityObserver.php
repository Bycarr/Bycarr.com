<?php

namespace App\Observers;

use App\Models\City;
use Illuminate\Support\Str;

class CityObserver
{
    /**
     * Handle the City "creating" event.
     *
     * @param  \App\Models\City  $city
     * @return void
     */
    public function creating(City $city)
    {
        $city->uuid = Str::uuid();
    }
    /**
     * Handle the City "created" event.
     *
     * @param  \App\Models\City  $city
     * @return void
     */
    public function created(City $city)
    {
        //
    }

    /**
     * Handle the City "updated" event.
     *
     * @param  \App\Models\City  $city
     * @return void
     */
    public function updated(City $city)
    {
        //
    }

    /**
     * Handle the City "deleted" event.
     *
     * @param  \App\Models\City  $city
     * @return void
     */
    public function deleted(City $city)
    {
        //
    }

    /**
     * Handle the City "restored" event.
     *
     * @param  \App\Models\City  $city
     * @return void
     */
    public function restored(City $city)
    {
        //
    }

    /**
     * Handle the City "force deleted" event.
     *
     * @param  \App\Models\City  $city
     * @return void
     */
    public function forceDeleted(City $city)
    {
        //
    }
}
