@extends('layouts.app') 
@section('content')

      
<section id="product" class="product_section layout_padding">
    <div class="container">
    <div class="heading_container heading_center">
        <h2>
            <span> منتجات السلة </span>
        </h2>
    </div>
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">
                <i class="fa fa-times"></i>
            </button>
            <strong> نجاح  !</strong> {{ session('success') }}
        </div>
    @endif
    @if (Auth::user())
    <div class="row">
    
    @foreach ($carts as $cart)
        
        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
                <div class="option_container">
                <div class="options">
                    <a href="{{ route('delete.cart', $cart->id) }}" class="option1">
                      حذف
                    </a>
                    <a href="{{ route('order', $cart->product->id) }}" class="option2">
                    أطلب الان 
                    </a>
                </div>
                </div>
                <div class="img-box">
                <img src="{{ $cart->product->image }}" alt="">
                </div>
                <div class="detail-box">
                <h5>
                    {{ $cart->product->name }}
                </h5>
                <h6>
                    ${{ $cart->product->price }}
                </h6>
                </div>
            </div>
        </div>
        
    @endforeach
    </div>
    @else
    <div class="btn-box">
        <a href="{{ route('register') }}">
        سجل الان 
        </a>
    </div>
    @endif
    </div>
    </section>
    <!-- end product section -->


   @endsection