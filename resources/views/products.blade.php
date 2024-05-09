@extends('layouts.main')

@section('content')
<div class="container d-flex box">

    @foreach ($products_obj as $product)
    <div class="product">

        <div class="product-img">
          <img class="main-img" src="{{Vite::asset('resources/img/')}}{{$product->frontImage}}" alt="{{$product->name}}">
          <img class="hover-img" src="{{Vite::asset('resources/img/')}}{{$product->backImage}}" alt="{{$product->name}}">
          <div class="f-size-small tags">
            @foreach ($product->badges as $badge)
                <div class="badge {{$badge['type']}}">{{$badge['value']}}</div>
            @endforeach
          </div>
          <div class="favourite">&hearts;</div>
        </div>

        <div class="f-size-small product-brand">{{$product->brand}}</div>

        <div class="product-name">{{$product->name}}</div>

        <span class="f-size-small lower-price">{{$product->price}} &euro;</span>

        <span class="f-size-small price">{{$product->price}} &euro;</span>

    </div>
    @endforeach

</div>
@endsection
