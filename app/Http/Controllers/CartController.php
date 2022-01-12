<?php

namespace App\Http\Controllers;

use App\Helpers\CartHelper;
use App\Http\Requests\AddProductToCartRequest;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CartController extends Controller
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function index(): Factory|View|Application
    {
        $cart = session()->get('cart');

        return view('pages.cart', compact('cart'));
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function addProduct(Product $product, AddProductToCartRequest $request): JsonResponse
    {

        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [];
        }

        $productCartKey = $this->getProductKey($product);

        if (!empty($cart[$productCartKey])) {
            $cart[$productCartKey]['quantity'] += $request->getQuantity();
            session()->put('cart', $cart);

            return response()->json(['total' => CartHelper::totalQuantity($cart)]);
        }

        $cart[$productCartKey] = [
            'id' => $product->id,
            'name' => $product->name,
            'quantity' => $request->getQuantity(),
            'price' => $product->price,
        ];

        session()->put('cart', $cart);

        return response()->json(['total' => CartHelper::totalQuantity($cart)]);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function update(Request $request): RedirectResponse
    {
        $cart = session()->get('cart');

        if (!$cart || $request->get('quantity')) {
            redirect()->route('showCart');
        }

        foreach ($request->get('quantity') as $id => $quantity) {
            $cart[$id]['quantity'] = (int)$quantity;
            session()->put('cart', $cart);
        }

        return redirect()->route('showCart');
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function removeProduct(int $id): RedirectResponse
    {
        $cart = session()->get('cart');

        if (!empty($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('showCart');
    }

    private function getProductKey(Product $product): string
    {
        return (string)($product->id);
    }

}
