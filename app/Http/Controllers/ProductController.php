<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index()
   {
       $products = Product::all();
       return view('products', compact('products'));
   }


	public function store(Request $request)
    {
  
        Product::create($request->all());
   
        return redirect()->route('products')
                        ->with('success','Product created successfully.');
    }

   
    public function create()
    {
        return view('products.create');
    }
	
		public function remove(Product $product)
   {
       $product -> delete();
       return view('products', compact('products'));
   }
}
