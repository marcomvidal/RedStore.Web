@extends('layouts.app')

@section('content')
  @include('partials/breadcrumb', ['links' => []])

  <section class="row">
    @foreach ($products as $product)
      @include('products.partials.summary-card', ['product' => $product])
    @endforeach
  </section>

  <footer class="text-center mt-3">
    {{ $products->links() }}
  </footer>
@endsection