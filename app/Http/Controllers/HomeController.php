<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::query()->orderBy('created_at')->take(3)->get();

        return view('pages.index', compact('products'));
    }

    public function show(Category $category)
    {
        return view('pages.category', ['products' => $category->products], compact('category'));
    }

}
