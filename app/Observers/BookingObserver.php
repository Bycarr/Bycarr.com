<?php

namespace App\Observers;

use App\Models\Booking;
use App\Repositories\BookingRepository;
use Illuminate\Support\Str;

class BookingObserver
{
    protected $booking;

    public function __construct(BookingRepository $booking)
    {
        $this->booking = $booking;
    }
    /**
     * Handle the Booking "creating" event.
     *
     * @param  \App\Models\Booking  $booking
     * @return void
     */
    public function creating(Booking $booking)
    {
        $booking->uuid = Str::uuid();
        $booking->code = $this->code();
    }
    /**
     * Handle the Booking "created" event.
     *
     * @param  \App\Models\Booking  $booking
     * @return void
     */
    public function created(Booking $booking)
    {
        //
    }

    /**
     * Handle the Booking "updated" event.
     *
     * @param  \App\Models\Booking  $booking
     * @return void
     */
    public function updated(Booking $booking)
    {
        //
    }

    /**
     * Handle the Booking "deleted" event.
     *
     * @param  \App\Models\Booking  $booking
     * @return void
     */
    public function deleted(Booking $booking)
    {
        //
    }

    /**
     * Handle the Booking "restored" event.
     *
     * @param  \App\Models\Booking  $booking
     * @return void
     */
    public function restored(Booking $booking)
    {
        //
    }

    /**
     * Handle the Booking "force deleted" event.
     *
     * @param  \App\Models\Booking  $booking
     * @return void
     */
    public function forceDeleted(Booking $booking)
    {
        //
    }
    protected function code()
    {
        $count = $this->booking->withTrashed()->count();
        $count += 1;
        $count = str_pad($count, 7, 0, STR_PAD_LEFT);
        return  $count;
    }
}
