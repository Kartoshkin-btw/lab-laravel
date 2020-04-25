@extends('products.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="{{url('products/create') }}" class="btn btn-success">Create</a></div>
				<div class="panel-heading"><a href="{{url('products/cart') }}" class="btn btn-success">Cart</a></div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products  as $product)
                            <tr>
                                <td><img src="{{ $product->photo }}" width="300" height="300"></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
								<td>{{ $product->price }}</td>
                                <td style="text-align:right;">
								<form action="{{ url('products/remove',$product->id) }}" method="POST">
  
								@csrf
								@method('DELETE')
      
								<button type="submit" class="btn btn-danger">Delete</button>
                                 <p class="btn-holder"><a href="{{ url('products/add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

