<?php

namespace App\Observers;

use App\Models\ProductModel;
use Illuminate\Support\Str;

class ProductModelObserver
{
    /**
     * Handle the ProductModel "creating" event.
     *
     * @param  \App\Models\ProductModel  $productModel
     * @return void
     */
    public function creating(ProductModel $productModel)
    {
        $productModel->uuid = Str::uuid();
    }
    /**
     * Handle the ProductModel "created" event.
     *
     * @param  \App\Models\ProductModel  $productModel
     * @return void
     */
    public function created(ProductModel $productModel)
    {
        //
    }

    /**
     * Handle the ProductModel "updated" event.
     *
     * @param  \App\Models\ProductModel  $productModel
     * @return void
     */
    public function updated(ProductModel $productModel)
    {
        //
    }

    /**
     * Handle the ProductModel "deleted" event.
     *
     * @param  \App\Models\ProductModel  $productModel
     * @return void
     */
    public function deleted(ProductModel $productModel)
    {
        //
    }

    /**
     * Handle the ProductModel "restored" event.
     *
     * @param  \App\Models\ProductModel  $productModel
     * @return void
     */
    public function restored(ProductModel $productModel)
    {
        //
    }

    /**
     * Handle the ProductModel "force deleted" event.
     *
     * @param  \App\Models\ProductModel  $productModel
     * @return void
     */
    public function forceDeleted(ProductModel $productModel)
    {
        //
    }
}
