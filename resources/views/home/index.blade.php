@extends('layouts.app')

@section ('content')

<div class="container p-0">
  @if(Session::has('success'))
  <div class="row">
    <div class="col-12">
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div>
  </div>
  @endif
      <!-- FEATURED SHOES [S]-->
      <h2 class="pt-4">BESTSELLER</h2>
    <div class="row d-flex justify-content-center">
      @foreach ($products as $product)    
      <div class="col-lg-3 col-md-6 col-sm-6 col-6 pt-3">
        <div class="card">
          <a href="{{ route('product.show',['product'=>$product->id]) }}">
            <div class="card-body ">
              <div class="product-info">
                <div class="info-1"><img src="{{ asset('/storage/'.$product->image) }}" alt=""></div>
                <div class="info-2"><a href="product/{{ $product->id }}"><h4>{{ $product->name }}</h4></a></div>
                <div class="info-3"><h5>RP. {{ $product->price }}</h5></div>
              </div>
            </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>
    <!-- FEATURED SHOES [E]-->
        <!-- MEN & WOMEN [S]-->
        <div class="row pt-4">
      <div class="col-6 d-flex flex-column align-items-center genderwrapper">
        <a href="{{ route('product.index') }}">
          <button id="maleBtn">
          <div class="gender">
            <img class="d-block w-100" src="{{ asset('photo/cowok.jpeg') }}" alt="">
            <h2 class="pt-2">MEN</h2>
          </div>
        </button>
        </a>
      </div>
      <div class="col-6 d-flex flex-column align-items-center genderwrapper">
        <a href="{{ route('product.index') }}">
          <button id="femaleBtn">
          <div class="gender">
            <img class="d-block w-100" src="{{ asset('photo/cewek.jpeg') }}" alt="">
            <h2 class="pt-2">WOMEN</h2>
          </div>
        </button>
        </a>
      </div>
    </div>
    <!-- MEN & WOMEN [E]-->

  <!-- GET FIT FROM HOME [S]-->
    <div class="row">
      <div class="col-12 promowrap">
        <div class="row m-0 p-0">
          <div class="col-4 promo-info h-100">
            <div class="infowrapper d-flex flex-column h-100 justify-content-center">
              <h2>KHUSUS PENCINTA GEMAR</h2>
              <h4>100% Ori</h4>
              <p>HERO NEVER FADE</p>
              <a href="{{ route('product.index') }}" class="w-100 button">LIHAT LAIN</a>
            </div>   
          </div> 
        </div>
        <img class="d-block w-100" src="{{ asset('photo/best.jpeg') }}" alt="">
      </div>
    </div>
    <!-- GET FIT FROM HOME [E]-->





</div>

@endsection