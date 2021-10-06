<div class="account-sidebar d-flex col-3 flex-column flex-shrink-0 p-3 bg-light vh-100" >
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <span class="fs-4">Gomoto</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{route('account')}}" class="nav-link link-dark {{(url()->current() === route('account') ? 'active' : '')}}" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                Home
            </a>
        </li>
        <li>
            <a href="{{route('account/dashboard')}}" class="nav-link link-dark {{(url()->current() === route('account/dashboard') ? 'active' : '')}}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{route('account/orders')}}" class="nav-link link-dark {{(url()->current()  === route('account/orders') ? 'active' : '')}}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                Orders
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
               >
            </a>
        </li>
        <li>
            <a href="{{route('restaurants')}}" class="nav-link link-dark {{(\Illuminate\Support\Str::contains(url()->current(), 'restaurants') ? 'active' : '')}}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                New order
            </a>
        </li>
        <li>
            <a href="{{route('logout')}}" class="nav-link link-dark" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        </li>
        <li class="cart-icon">
            <img src="{{asset('/src/img/carts.png')}}" alt="Cart">
                <span class="cart-counter">{{ \App\Services\ShopService::getCartCount()  }}</span>
        </li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
