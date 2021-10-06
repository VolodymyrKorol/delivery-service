@extends('account.account-layout')

@section('content')
    <div class="row">
        <div class="account-main-block col-6 d-flex flex-column align-items-center">
            <img src="{{asset('/src/img/shopping-bag.png')}}" alt="image">
            <h3 class="h3 font-weight-normal text-center">You have 0 active orders.</h3>
        </div>
    </div>
    <div class="row">
    </div>
@endsection
