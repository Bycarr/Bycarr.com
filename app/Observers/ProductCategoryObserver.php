<?php

namespace App\Observers;

use App\Models\ProductCategory;
use Illuminate\Support\Str;

class ProductCategoryObserver
{
    /**
     * Handle the ProductCategory "creating" event.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return void
     */
    public function creating(ProductCategory $productCategory)
    {
        $productCategory->uuid = Str::uuid();
    }
    /**
     * Handle the ProductCategory "created" event.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return void
     */
    public function created(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Handle the ProductCategory "updated" event.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return void
     */
    public function updated(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Handle the ProductCategory "deleted" event.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return void
     */
    public function deleted(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Handle the ProductCategory "restored" event.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return void
     */
    public function restored(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Handle the ProductCategory "force deleted" event.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return void
     */
    public function forceDeleted(ProductCategory $productCategory)
    {
        //
    }
}
