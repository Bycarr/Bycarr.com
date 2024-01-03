<?php

namespace App\Observers;

use App\Models\Agent;
use Illuminate\Support\Str;

class AgentObserver
{
     /**
     * Handle the Agent "creating" event.
     *
     * @param  \App\Models\Agent  $agent
     * @return void
     */
    public function creating(Agent $agent)
    {
        $agent->uuid =Str::uuid();
    }
    /**
     * Handle the Agent "created" event.
     *
     * @param  \App\Models\Agent  $agent
     * @return void
     */
    public function created(Agent $agent)
    {
        //
    }

    /**
     * Handle the Agent "updated" event.
     *
     * @param  \App\Models\Agent  $agent
     * @return void
     */
    public function updated(Agent $agent)
    {
        //
    }

    /**
     * Handle the Agent "deleted" event.
     *
     * @param  \App\Models\Agent  $agent
     * @return void
     */
    public function deleted(Agent $agent)
    {
        //
    }

    /**
     * Handle the Agent "restored" event.
     *
     * @param  \App\Models\Agent  $agent
     * @return void
     */
    public function restored(Agent $agent)
    {
        //
    }

    /**
     * Handle the Agent "force deleted" event.
     *
     * @param  \App\Models\Agent  $agent
     * @return void
     */
    public function forceDeleted(Agent $agent)
    {
        //
    }
}
