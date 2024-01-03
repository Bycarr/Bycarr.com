<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\ProductAttribute;
use App\Repositories\CityRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class CityController extends Controller
{
    protected $city, $product;
    public function __construct(ProductRepository $product, CityRepository $city)
    {
        $this->city = $city;
        $this->product = $product;
    }
    public function index()
    {
        $cities = $this->city->where('status', 1)->get();
        return view('website.city', compact('cities'));
    }
    public function show(Request $request, $slug)
    {
        $model = $this->city->where('slug', $slug)->where('status', 1)->first();
        if (!$model) {
            abort(404);
        }
        $query = $this->product->with('city')->where('city_id', $model->id)->where('status', 1)->where('is_verified', 1);

        $attributes = ProductAttribute::with('attribute')->whereIn('product_id', $query->pluck('id')->toArray())->get()->groupBy('key');
        $filters = [];
        foreach ($attributes as $key => $attribute) {
            foreach ($attribute as $attr) {
                if ($attr->attribute->show_in_filter && (!isset($filters[$key]) || !in_array($attr->value, $filters[$key]))) {

                    $filters[$key][] = $attr->value;
                }
            }
            if ($request->has($key)) {
                $query->when($request->has($key), function ($q) use ($request, $key) {
                    $values = explode(',', $request->$key);
                    $q->whereHas('attributes', function ($qr) use ($request, $key, $values) {
                        $qr->where('key', $key)->whereIn('value', $values);
                    });
                });
            }
        }
        $products = $query->when($request->has('sort'), function ($q) use ($request) {
            if ($request->sort == 'price_low_to_high') {
                $q->orderBy('price', 'asc');
            }
            if ($request->sort == 'price_high_to_low') {
                $q->orderBy('price', 'desc');
            }
            if ($request->sort == 'product_new_to_old') {
                $q->orderBy('id', 'desc');
            }
            if ($request->sort == 'product_old_to_new') {
                $q->orderBy('id', 'asc');
            }
        })
            ->when($request->has('price'), function ($q) use ($request) {
                $price = explode('-', $request->price);
                $q->where('price', '>=', $price[0])->where('price', '<=', $price[1]);
            })
            ->paginate(12);
        $prices = $products->pluck('price')->toArray();
        return view('website.products', compact('model', 'products', 'filters', 'prices'));
    }
}
