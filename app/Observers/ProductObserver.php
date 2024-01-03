<?php

namespace App\Observers;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Support\Str;

class ProductObserver
{
    protected $product;

    public function __construct(ProductRepository $product)
    {
        $this->product = $product;
    }
    /**
     * Handle the Product "creating" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function creating(Product $product)
    {
        $product->uuid = Str::uuid();
        $product->code = $this->code();
    }
    /**
     * Handle the Product "created" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        //
    }

    /**
     * Handle the Product "updated" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        //
    }

    /**
     * Handle the Product "deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        //
    }

    /**
     * Handle the Product "restored" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function restored(Product $product)
    {
        //
    }

    /**
     * Handle the Product "force deleted" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        //
    }
    protected function code()
    {
        $count = $this->product->withTrashed()->count();
        $count += 1;
        $count = str_pad($count, 7, 0, STR_PAD_LEFT);
        return  $count;
    }
}
