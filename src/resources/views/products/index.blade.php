@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @foreach ($products as $product)
        @include('products.partials.summary-card', ['product' => $product])
      @endforeach
    </div>

    {{ $products->links() }}
  </div>

  
@endsection