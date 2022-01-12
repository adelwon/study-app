<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): Factory|View|Application
    {
        $products = Product::query()->orderBy('created_at')->take(3)->get();

        return view('pages.index', compact('products'));
    }

    public function show(Category $category): Factory|View|Application
    {
        return view('pages.category', [
            'products' => $category->products,
            ], compact('category'));
    }

}
