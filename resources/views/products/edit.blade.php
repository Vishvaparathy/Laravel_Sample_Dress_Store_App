  @extends('layouts.app')
 @section('main')
  <h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                  </svg>Edit Product</h5>
<hr/>
<nav class="my-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Edit Product</li>

    </ol>
</nav>

<div class="col-md-8">
    <form action="/products/{{$product->id}}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3" >
            <div class="col-md-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control 
                @if($errors->has('name')) {{'is-invalid'}} @endif "
                placeholder="Enter product name" value="{{old('name'),$product->name}}"/>
                @if($errors->has('name'))
                <div class="invalid-feedback">{{$errors->first("name")}}</div>
                @endif

            </div>
        </div>
        <div class="row mb-3" >
            <div class="col-md-6">
                <label for="mrp" class="form-label">M.R.P</label>
                <input type="text" name="mrp" id="mrp" class="form-control 
                @if($errors->has('mrp')) {{'is-invalid'}} @endif " 
                placeholder="Enter M.R.P" value="{{old('mrp'),$product->mrp}}">
                 @if($errors->has('mrp'))
                <div class="invalid-feedback">{{$errors->first("mrp")}}</div>
                @endif
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Selling Price</label>
                <input type="text" name="price" id="mrp" class="form-control
                @if($errors->has('price')) {{'is-invalid'}} @endif " 
                placeholder="Enter Selling Price" value="{{old('price'),$product->price}}">
                 @if($errors->has('price'))
                <div class="invalid-feedback">{{$errors->first("price")}}</div>
                @endif
            </div>
        </div>

        <div class="row mb-3" >
            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" style="resize:none; height:150px" class="form-control
                @if($errors->has('description')) {{'is-invalid'}} @endif " 
                placeholder="Enter description">{{old('description'),$product->description}}</textarea>
                 @if($errors->has('description'))
                <div class="invalid-feedback">{{$errors->first("description")}}</div>
                @endif
            </div>
        </div>

        <div class="row mb-3" >
             <div class="col-md-12">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" name="image" id="image" class="form-control
                @if($errors->has('image')) {{'is-invalid'}} @endif" >
                 @if($errors->has('image'))
                <div class="invalid-feedback">{{$errors->first("image")}}</div>
                @endif
             </div>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-dark">Update Product</button>
            <button type="reset" class="btn btn-danger">Clear All</button>
        </div>
    </form>
</div>
@endsection