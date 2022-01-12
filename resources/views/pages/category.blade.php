@extends('layout')
@section('title', $category->name.'-ShopOnline')

@section('content')
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">{{$category->name}}</h1>
        <p class="fs-5 text-muted">{{$category->description}}</p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        @forelse($products as $product)
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
                        <a href="{{route('showProduct', $product)}}"
                           class="btn btn-md btn-outline-primary">Переглянути</a>
                        <button type="button" class="btn btn-md btn-primary cart_button" data-id="{{$product->id}}">В корзину</button>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-sm-12">
                <h5 class="font-weight-bold text-center mb-5">Товары не найдены</h5>
            </div>
        @endforelse
    </div>
@endsection
