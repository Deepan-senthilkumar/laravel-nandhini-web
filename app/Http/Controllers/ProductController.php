<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $featuredProducts = Product::latest()->take(10)->get();

        return view('index', compact('categories', 'featuredProducts'));
    }

    public function category($slug = null)
    {
        $viewName = 'sarees';

        if (!$slug) {
            $slug = 'sarees';
        }

        $category = Category::where('slug', $slug)->firstOrFail();
        $products = $category->products()->paginate(12);
        
        if (view()->exists($slug)) {
            $viewName = $slug;
        }

        return view($viewName, compact('category', 'products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('product-detail', compact('product', 'relatedProducts'));
    }
}
