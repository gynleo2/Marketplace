<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $products = \App\Product::paginate(12);            
        return view('products')->with('products', $products);
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
