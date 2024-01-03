<?php

namespace App\Observers;

use App\Models\ProductBrand;
use Illuminate\Support\Str;

class ProductBrandObserver
{
    /**
     * Handle the ProductBrand "creating" event.
     *
     * @param  \App\Models\ProductBrand  $productBrand
     * @return void
     */
    public function creating(ProductBrand $productBrand)
    {
        $productBrand->uuid = Str::uuid();
    }
    /**
     * Handle the ProductBrand "created" event.
     *
     * @param  \App\Models\ProductBrand  $productBrand
     * @return void
     */
    public function created(ProductBrand $productBrand)
    {
        //
    }

    /**
     * Handle the ProductBrand "updated" event.
     *
     * @param  \App\Models\ProductBrand  $productBrand
     * @return void
     */
    public function updated(ProductBrand $productBrand)
    {
        //
    }

    /**
     * Handle the ProductBrand "deleted" event.
     *
     * @param  \App\Models\ProductBrand  $productBrand
     * @return void
     */
    public function deleted(ProductBrand $productBrand)
    {
        //
    }

    /**
     * Handle the ProductBrand "restored" event.
     *
     * @param  \App\Models\ProductBrand  $productBrand
     * @return void
     */
    public function restored(ProductBrand $productBrand)
    {
        //
    }

    /**
     * Handle the ProductBrand "force deleted" event.
     *
     * @param  \App\Models\ProductBrand  $productBrand
     * @return void
     */
    public function forceDeleted(ProductBrand $productBrand)
    {
        //
    }
}
