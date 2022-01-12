@extends('layout')
@section('title', $product->name.'-ShopOnline')

@section('content')
    <div class="mb-4 shadow-sm product">
        <div class="header py-3">
            <h4 class="my-0 fw-normal product-name" data-id="{{$product->id}}">{{$product->name}}</h4>
            <p>Категорія: {{$product->category->name}}</p>
        </div>
        <div class="body">
            <h1 class="card-title pricing-card-title product-price">{{$product->price. ' ₴'}}</h1>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Кількість</span>
                <input class="quantity" name="quantity" type="number" min="1" max="100" value="1">
            </div>
            <ul class="list-unstyled mt-3 mb-4">
                {!! $product->description !!}
            </ul>
            <button type="button" class="btn btn-lg btn-outline-primary cart_button" data-id="{{$product->id}}">В корзину</button>
        </div>
    </div>
@endsection
