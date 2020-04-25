@extends('products.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('products/index') }}"> Back</a>
        </div>
    </div>
</div>

<form action="{{ url('products/create') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="description"></textarea>
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ImageURL:</strong>
                <input type="text" name="photo" class="form-control" placeholder="photo">
            </div>
        </div>
		
		<div class="form-group">
                <strong>Price:</strong>
                <input type="number" step="0.01" name="price" class="form-control" placeholder="price">
           </div>
		
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
		
    </div>
   
</form>
@endsection