@extends('layouts.app')

@section('content')
  @include('partials/breadcrumb', ['links' =>
      [$product->name => route('products.show', $product->id)]
  ])

  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-8">
          <h2>{{ $product->name }}</h2>
          <h5>{{ $product->sku }}</h5>
          <p class="my-4">{{ $product->description }}</p>

          <button type="button" class="btn btn-primary">Add to cart</button>
          <button type="button" class="btn btn-secondary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="{{ $product->getPicturePath() }}" />
          </div>
          <h3>{{ $product->getCurrencyPrice() }}</h3>
        </div>
      </div>
    </div>
  </div>
@endsection