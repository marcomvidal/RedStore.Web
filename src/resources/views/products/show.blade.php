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
          <p class="mt-4">{{ $product->description }}</p>

          <h3 class="mb-4">{{ $product->getCurrencyPrice() }}</h3>

          <button type="button" class="btn btn-primary">Add to cart</button>
          <button type="button" class="btn btn-secondary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
          <div class="align-self-center">
            <a href="{{ $product->getPicturePath() }}">
              <img src="{{ $product->getPicturePath() }}" />
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
@endsection