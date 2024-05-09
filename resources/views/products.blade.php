@extends('layouts.main')

@section('content')
<div class="container d-flex box">

    <div class="product">

        <div class="product-img">
          <img class="main-img" src="" :alt="">
          <img class="hover-img" src="" :alt="">
          <div class="f-size-small tags">
            <div class="badge">badge</div>
          </div>
          <div class="favourite">&hearts;</div>
        </div>

        <div class="f-size-small product-brand">brand</div>

        <div class="product-name">name</div>

        <span class="f-size-small lower-price">disc &euro;</span>

        <span class="f-size-small price">price &euro;</span>

      </div>

</div>
@endsection
