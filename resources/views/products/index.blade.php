@extends('layout')
@section('title', 'Products-ShopOnline')
@section('content')
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        @foreach($products as $product)
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">{{$product->name}}</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">{{$product->price. ' ₴'}}</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        {!! $product->description !!}
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">В корзину</button>
                </div>
            </div>
        </div>
            @endforeach
    </div>
@endsection
