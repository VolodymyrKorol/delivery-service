@extends('account.account-layout')

@section('content')
    <div class="header-hero">
        <div class="header-hero-background kfc"></div>
        <h1 class="header-hero-title">{{$provider['name']}}</h1>
    </div>
    <section id="restaurant_kfc">
        <div class="menu">
            @foreach($categories as $category)
            <div class="menu-category">
                <span class="menu-category-title">{{$category['category']['title']}}</span>
                <ul class="menu-category-list">
                    @foreach($category['products'] as $product)
                    <li class="menu-category-list__item">
                        <a class="menu-category-list__item-link" data-product_id="{{$product['id']}}" href="">
                            <img src="{{$product['main_image']}}" alt="">
                            <span>{{$product['title']}}</span>
                            <span>{{$product['price'] . ' ' . $product['currency'] }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
        <div class="modal-popup">
            <h4 class="h4">Success</h4>
            <p class="success-text">Your product was successfully added to cart!</p>
        </div>
    </section>
@endsection
