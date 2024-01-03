<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Repositories\BannerRepository;
use App\Repositories\CityRepository;
use App\Repositories\ProductBrandRepository;
use App\Repositories\ProductCategoryRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $banner, $brand, $category, $product, $city;
    public function __construct(
        BannerRepository $banner,
        ProductBrandRepository $brand,
        ProductCategoryRepository $category,
        ProductRepository $product,
        CityRepository $city
    ) {
        $this->banner = $banner;
        $this->category = $category;
        $this->brand = $brand;
        $this->product = $product;
        $this->city = $city;
    }
    public function index()
    {
        $banners = $this->banner->where('status', 1)->orderBy('display_order')->get();
        $brands = $this->brand->with(['products','products.city'])->where('status', 1)->orderBy('display_order')->limit(12)->get();
        $categories = $this->category->where('status', 1)->orderBy('display_order')->get();
        $latestProducts = $this->product->with('city')->where('status', 1)->where('is_verified', 1)->orderBy('id', 'desc')->limit(10)->get();
        $products = $this->product->with('city')->where('status', 1)->where('is_verified', 1)->inRandomOrder()->limit(12)->get();
        $cities = $this->city->where('status', 1)->orderBy('display_order')->limit(18)->get();
        return view('website.index', compact('banners', 'brands', 'categories', 'latestProducts', 'products', 'cities'));
    }
}
