<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductToCartRequest extends FormRequest
{

    public function rules():array
    {
        return [
            'quantity' => ['required', 'numeric'],
        ];
    }

    public function getQuantity(): int
    {
        return (int)$this->get('quantity');
    }
}
