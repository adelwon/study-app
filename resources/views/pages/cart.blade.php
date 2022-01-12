@extends('layout')
@section('title')
    Корзина-ShopOnline
@endsection

@section('content')
    <div class="page-content cart">
        <div class="container">
            @if($cart)
                <form action="{{ route('updateProduct') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="mb-2">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Товар</th>
                                        <th>Цена</th>
                                        <th>Количество</th>
                                        <th>Всего</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cart as $product)
                                        <tr>
                                            <td>
                                                <a href="{{route('showProduct', $product['id'])}}">{{ $product['name'] }}</a>
                                            </td>
                                            <td>
                                                {{ $product['price']}} грн
                                            </td>
                                            <td data-th="quantity">
                                                <input name="quantity[{{ $product['id'] }}]" type="number"
                                                       style="width:4em;" min="1" max="100"
                                                       value="{{ $product['quantity'] }}"
                                                       class="form-control quantity"/>
                                            </td>
                                            <td class="product-price">
                                                    <span class="amount">
                                                        {{  $total[] = $product['price'] * $product['quantity'] }} грн
                                                    </span>
                                            </td>
                                            <td>
                                                <a href="{{ route('removeProduct',['id'=>$product['id']]) }}"
                                                   class="product-remove" title="Убрать из корзины"
                                                >
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-4">
                                <h5>Ваш заказ</h5>
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <td><h5>Итого</h5></td>
                                        <td>{{array_sum($total)}} грн</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-sm btn-dark update-cart">Обновить корзину <i
                                        class="fa fa-refresh"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            @else
                <section class="text-center">
                    <h4>Корзина пустая</h4>
                    <p>Добавьте товар в корзину</p>
                </section>
            @endif

            <div class="pt-5 mt-5">
                <h3>Оформить заказ</h3>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-xs-6">
                                    <label>Ваше имя *</label>
                                    <input type="text" class="form-control" name="first_name"
                                           required
                                    >
                                </div>
                                <div class="col-xs-6">
                                    <label>Ваша фамилия *</label>
                                    <input type="text" class="form-control" name="last_name"
                                           required
                                    >
                                </div>
                            </div>
                            <label>Адрес *</label>
                            <input type="text" class="form-control" name="address" required
                                   placeholder="Полный адрес"
                            >
                            <div class="row">
                                <div class="col-xs-6">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control" name="email"
                                           placeholder="example@mail.com (не обязательно)"
                                    >
                                </div>
                                <div class="col-xs-6">
                                    <label>Номер телефона *</label>
                                    <input type="tel"
                                           placeholder="+38(0__)___-__-__" class="form-control" name="phone"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center justify-content-center pt-2">
                            <button class="btn btn-primary" type="submit">
                                Оформить заказ
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
