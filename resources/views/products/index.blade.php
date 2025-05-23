@extends('layouts.app')
@section('main')
<div class="d-flex justify-content-between">
            <h5>Product Details</h5>
            <a href="products/create" class="btn btn-primary"> New Product</a>
        </div>
        <div class="col-md-12 table-responsive mt-3">
            <table class="table table-bordered">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>M.R.P</th>
                <th>Selling Price</th>
                <th>Action</th>
             </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)

              @php

              $index=($products->currentPage() -1)* $products->perPage() +$loop -> iteration;

              @endphp


              <tr>
                <td>{{$loop->iteration}}</td>
                <td><img src="{{ asset('products/' . $product->image) }}" alt="{{ $product->name }}" style="width:70px; height:70px; object-fit:contain"></td>
                <td><a href="products/{{$product->id}}/show">{{$product->name}}</a></td>
                <td>Rs.{{$product->mrp}}</td>
                <td>Rs.{{$product->price}}</td>
                <td>
                  <a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                  </svg></a>
                  <a href="products/{{$product->id}}/delete" onclick="return confirm('Are yousure you want to Delete?')" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                  </svg></a>
                </td>
              </tr>
              @endforeach

                 
            </tbody>
                
            </table>

            {{$products->links()}}
        </div>

@endsection