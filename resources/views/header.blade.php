<div class="header">
    <div class="header-container container">
        <div class="logo">
            <img src="src/img/logo_2x.png" alt="">
        </div>
        <div class="main-menu-block">
            <ul class="main-menu-list">


                <li class="main-menu-item main-page">
                    <a href="#">Home</a>
                </li>
                <li class="main-menu-item">
                    <a href="#">About us</a>
                </li>
                <li class="main-menu-item">
                    <a href="#">Catalog</a>
                </li>
                <li class="main-menu-item">
                    <a href="#">Blog</a>
                </li>
                <li class="main-menu-item">
                    <a href="#">Contacts</a>
                </li>

                @if (Route::has('login'))
                    @auth
                        <li class="main-menu-item main-page">
                            <a href="{{ url('/home') }}">Home</a>
                        </li>
                    @else
                        <li class="main-menu-item">
                            <a href="{{ route('login') }}">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="main-menu-item">
                                <a href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</div>
