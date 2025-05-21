@extends('layouts.app')
@section('main')
   
        <h5>Product Details</h5>
        <nav class="my-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">View Product</li>

    </ol>
</nav>

<div class="card">
    <img src="{{ asset('products/' . $product->image) }}" alt="{{$product->name}}" class="card-img-top"/>

    <div class="card-body">
        <h5 class="card-title fw-bold">{{$product->name}}</h5>
        <p class="card-text">{{$product->description}}</p>
        <p class="fw-semibold">{{$product->mrp}} <small class="text-danger text-decoration-line-through">Rs.30000</small></p>
        <p class="fw-semibold">{{$product->price}}<small class="text-success">Rs.25000</small></p>
    </div>
</div>

@endsection