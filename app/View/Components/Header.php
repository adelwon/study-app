<?php

namespace App\View\Components;

use App\Helpers\CartHelper;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function render(): View|Factory|Htmlable|\Closure|string|Application
    {
        $cart = session()->get('cart');
        $categories = Category::all();

        return view('components.header', ['cartCount' => $cart ? CartHelper::totalQuantity($cart) : 0,], compact('categories'));
    }
}
