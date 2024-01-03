<?php

namespace App\Providers;

use App\Models\Agent;
use App\Models\Attribute;
use App\Models\Banner;
use App\Models\Booking;
use App\Models\City;
use App\Models\Content;
use App\Models\Menu;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use App\Models\ProductModel;
use App\Observers\AgentObserver;
use App\Observers\AttributeObserver;
use App\Observers\BannerObserver;
use App\Observers\BookingObserver;
use App\Observers\CityObserver;
use App\Observers\ContentObserver;
use App\Observers\MenuObserver;
use App\Observers\ProductBrandObserver;
use App\Observers\ProductCategoryObserver;
use App\Observers\ProductModelObserver;
use App\Observers\ProductObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ProductCategory::observe(ProductCategoryObserver::class);
        ProductModel::observe(ProductModelObserver::class);
        Product::observe(ProductObserver::class);
        ProductBrand::observe(ProductBrandObserver::class);
        Agent::observe(AgentObserver::class);
        Attribute::observe(AttributeObserver::class);
        Content::observe(ContentObserver::class);
        Menu::observe(MenuObserver::class);
        City::observe(CityObserver::class);
        Banner::observe(BannerObserver::class);
        Booking::observe(BookingObserver::class);
    }
}
