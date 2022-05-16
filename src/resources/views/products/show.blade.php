@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>{{ $product-> name }}</h1>

    <ul>
      <li>SKU: {{ $product->sku }}</li>
      <li>R$ {{ $product->price }}</li>
    </ul>

    {{ $product->description }}
  </div>
@endsection