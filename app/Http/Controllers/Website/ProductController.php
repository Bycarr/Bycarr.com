<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\ProductAttribute;
use App\Repositories\ProductBrandRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product, $brand;
    public function __construct(ProductRepository $product, ProductBrandRepository $brand)
    {
        $this->product = $product;
        $this->brand = $brand;
    }
    public function index(Request $request)
    {
        $query = $this->product->with('city')->where('status', 1)->where('is_verified', 1);
        $query = $query->when($request->has('search'), function ($q) use ($request) {
            $q->where(function ($qr) use ($request) {
                return $qr->orwhere('title', 'like', '%' . $request->search . '%')
                    ->orwhere('description', 'like', '%' . $request->search . '%')
                    ->orwhere('excerpt', 'like', '%' . $request->search . '%')
                    ->orWhereHas('brand', function ($qr) use ($request) {
                        return $qr->where('title', 'like', '%' . $request->search . '%');
                    })
                    ->orWhereHas('category', function ($qr) use ($request) {
                        return $qr->where('title', 'like', '%' . $request->search . '%');
                    })
                    ->orWhereHas('city', function ($qr) use ($request) {
                        return $qr->where('title', 'like', '%' . $request->search . '%');
                    })
                    ->orWhereHas('attributes', function ($qr) use ($request) {
                        return $qr->where('value', 'like', '%' . $request->search . '%')
                            ->orwhere('key', 'like', '%' . $request->search . '%');
                    });
            });
        });

        $attributes = ProductAttribute::whereIn('product_id', $query->pluck('id')->toArray())->get()->groupBy('key');
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
            ->when($request->has('brand'), function ($q) use ($request) {
                $brands = explode(',', $request->brand);
                $q->whereIn('product_brand_id', $brands);
            })
            ->paginate(12);
        $prices = $products->pluck('price')->toArray();
        $brands = $this->brand->where('status', 1)->orderBy('title', 'asc')->get();
        return view('website.products', compact('products', 'filters', 'prices', 'brands'));
    }
    public function show($slug)
    {
        $product = $this->product->with(['brand', 'images', 'city'])->where('slug', $slug)->where('status', 1)->where('is_verified', 1)->first();
        if (!$product) {
            abort(404);
        }
        $similarProducts = $this->product->with('city')->where('product_brand_id', $product->product_brand_id)->where('status', 1)->where('is_verified', 1)->limit(4)->get();
        return view('website.product', compact('product', 'similarProducts'));
    }
}
