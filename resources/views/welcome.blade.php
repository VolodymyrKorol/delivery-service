<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('head')

    <body class="antialiased">
        <div class="relative items-top min-h-screen dark:bg-gray-900">


                <div class="hero-block">
                    <div class="hero-background">
                    </div>
                </div>
                <div class="main-hero-container">
                    @include('header')
                    <div class="hero-content">
                        <div class="hero-content-container container">
                            <div class="hero-content-block">
                                <section class="hero-content-wrap">
                                    <div class="main-title-wrap">
                                        <h1 class="main-title">
                                            <span>Express</span><br>Home delivery
                                        </h1>
                                    </div>
                                    <div class="main-description-wrap">
                                        <p class="main-title-description">
                                            <span>Curabitur imperdiet varius lacus, id placerat purus vulputate non. Fusce in felis vel arcu maximus placerat eu ut arcu. Ut nunc ex, gravida vel porttitor et, pretium ac sapien.</span>
                                        </p>
                                    </div>
                                    <div class="main-title-button-wrap">
                                        <a class="button" href="#"><span>Read more</span></a>
                                    </div>
                                </section>
                                <div class="hero-img-block">
                                    <img src="src/img/slider-courier-mask.png" alt="">
                                </div>
                            </div>
                            <div class="hero-content-categories-block">
                                <div class="category-content-wrap">
                                    <div class="category-img"><span id="fastfood"></span></div>
                                    <div class="category-content-title">
                                        <h3>Fastfood</h3>
                                    </div>
                                </div>
                                <div class="category-content-wrap">
                                    <div class="category-img"><span id="pizza"></span></div>
                                    <div class="category-content-title">
                                        <h3>Hot pizza</h3>
                                    </div>
                                </div>
                                <div class="category-content-wrap">
                                    <div class="category-img"><span id="asian"></span></div>
                                    <div class="category-content-title">
                                        <h3>Asian food</h3>
                                    </div>
                                </div>
                                <div class="category-content-wrap">
                                    <div class="category-img"><span id="meat"></span></div>
                                    <div class="category-content-title">
                                        <h3>Raw meat</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>





<!-- <div class="popular-goods-wrap">
    <div class="popular-goods-title">
        <h2><span>Popular Goods</span></h2>
    </div>
    <div class="popular-goods-categories">
        <ul class="popular-goods-categories-list">
            <li class="popular-goods-categories-item">
                <a href=""><span>Fastfood</span></a>
            </li>
            <li class="popular-goods-categories-item">
                <a href=""><span>Hot Pizza</span></a>
            </li>
            <li class="popular-goods-categories-item">
                <a href=""><span>Asian Food</span></a>
            </li>
            <li class="popular-goods-categories-item">
                <a href=""><span>Raw Meat</span></a>
            </li>
        </ul>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="popular-goods-items carousel-inner">
          <div class="popular-goods-item carousel-item active">
            <div class="popular-goods-item-img"></div>
            <div class="popular-goods-item-title">
                <h4><span>Cheeseburger with Salad</span></h4>
            </div>
            <div class="popular-goods-item-description">
                <p><span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem …</span></p>
            </div>
            <div class="popular-goods-item-price">
                <span>19.00$</span>
            </div>
            <div class="popular-goods-item-btn">
                <a href="#"><span>Add to cart</span></a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
</div> -->

