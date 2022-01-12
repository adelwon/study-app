<?php

namespace App\Helpers;

class CartHelper
{
    public static function totalQuantity(array $cart): int
    {
        return collect($cart)->sum('quantity');
    }
}
