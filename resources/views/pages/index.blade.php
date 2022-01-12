@extends('layout')
@section('title', 'Products-ShopOnline')
@section('content')
    <div class="row row-cols-1 row-cols-md-3 mb-3  text-center">
        @foreach($products as $product)
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm product">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal text-start product-name">{{$product->name}}</h4>
                </div>
                <div class="card-body">
                    <h2 class="card-title pricing-card-title product-price">{{$product->price. ' ₴'}}</h2>
                    <ul class="list-unstyled mt-3 text-start">
                        {!! $product->description !!}
                    </ul>
                    <a href="{{route('showProduct', $product)}}" class="btn btn-md btn-outline-primary">Переглянути</a>
                    <button type="button" class="btn btn-md btn-primary cart_button" data-id="{{$product->id}}">В корзину</button>
                </div>
            </div>
        </div>
            @endforeach
    </div>
@endsection
