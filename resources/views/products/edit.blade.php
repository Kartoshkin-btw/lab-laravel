@extends('products.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ url('products/index') }}"> Back</a>
            </div>
        </div>
    </div>

  
    <form action="{{ url('products/update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
          <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="description">value="{{ $product->description }}"</textarea>
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ImageURL:</strong>
                <input type="text" name="photo" value="{{ $product->photo }}" class="form-control" placeholder="photo">
            </div>
        </div>
		
		<div class="form-group">
                <strong>Price:</strong>
                <input type="number" step="0.01" name="price" value="{{ $product->price }}" class="form-control" placeholder="price">
           </div>
		
   
    </form>
@endsection