@extends('layouts.app')

@section('content')
    @include('partials/breadcrumb', ['links' => []])

    <div class="row">
      @foreach ($products as $product)
        @include('products.partials.summary-card', ['product' => $product])
      @endforeach
    </div>

    <div class="text-center mt-3">
      {{ $products->links() }}
    </div>
@endsection