<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoresController extends Controller
{
  
    public function index()
    {
        $stores = \App\Store::paginate(12);            
        return view('stores')->with('stores', $stores);
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
