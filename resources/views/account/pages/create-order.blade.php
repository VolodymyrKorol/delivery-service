@extends('account.account-layout')

@section('content')
   <section id="restaurants">
       <div class="header-hero">
           <div class="header-hero-background"></div>
            <h1 class="header-hero-title">All restaurants</h1>
       </div>
       <div class="categories">
           <ul class="categories-list">
               @foreach($providers as $provider)
                  <li class="categories__item">
                      <img src="{{$provider['main_image']}}" alt="Provider">
                      <a href="{{route('menu', ['provider_id' => $provider['id']])}}">{{$provider['name']}}</a>
                  </li>
               @endforeach
           </ul>
       </div>
   </section>
@endsection
