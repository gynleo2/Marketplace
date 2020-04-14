@extends('master')

@section('title', 'Products Page')

@section('page_content')
  
  <div class="container">
    <h1>Product Page</h1>
    <hr>
    <div class="row ">
      
      @foreach ($products->items() as $prod) 
        <div class="card archive product-item col-md-4 py-2">
          <div class="product-ct h-100">
            <div class="product-image"></div>
            <div class="card-body">
              <h4 class="card-title">{{ $prod['name'] }}</h4>
              <p class="card-text description">{{ $prod['description'] }}</p>
              <h3>{{ $prod['price'] }}</h3>
              <a href="{{ '/' . $prod['slug'] }}" class="btn btn-success btn-block">Buy</a>        
            </div>
          </div>
        </div>
      @endforeach 

    </div>

    <div class='pagination'>
      {{ $products->links() }}
    </div>
  
</div>

@endsection

