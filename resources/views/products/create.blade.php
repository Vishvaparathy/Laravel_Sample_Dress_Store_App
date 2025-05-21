  @extends('layouts.app')
 @section('main')
  <h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
</svg>Add new Product</h5>
<hr/>
<nav class="my-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Add New Product</li>

    </ol>
</nav>

<div class="col-md-8">
    <form action="/products/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3" >
            <div class="col-md-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control 
                @if($errors->has('name')) {{'is-invalid'}} @endif "
                placeholder="Enter product name" value="{{old('name')}}"/>
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
                placeholder="Enter M.R.P" value="{{old('mrp')}}">
                 @if($errors->has('mrp'))
                <div class="invalid-feedback">{{$errors->first("mrp")}}</div>
                @endif
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Selling Price</label>
                <input type="text" name="price" id="mrp" class="form-control
                @if($errors->has('price')) {{'is-invalid'}} @endif " 
                placeholder="Enter Selling Price" value="{{old('price')}}">
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
                placeholder="Enter description"></textarea>
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
            <button type="submit" class="btn btn-dark">Save Product</button>
            <button type="reset" class="btn btn-danger">Clear All</button>
        </div>
    </form>
</div>
@endsection