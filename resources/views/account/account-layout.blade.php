<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('head')
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body class="antialiased">
        @include('symbols')
        <div id="account-app" class="d-flex">
            @include('account.parts.sidebar')
            <div class="account-content col-9">
                @yield('content')
            </div>
        </div>
        <script src="{{asset('/js/jquery.js')}}"></script>
        <script src="{{asset('js/account/index.js')}}"></script>
    </body>
</html>
