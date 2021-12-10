<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::query()->get();

        return view('products.index', compact('products'));
    }

    public function category($category)
    {
        //
    }

}
