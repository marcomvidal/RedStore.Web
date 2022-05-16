<div class="col-sm-2 col-md-3">
  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $product->name }}</h5>
      <p class="card-text">R$ {{ $product->price }}</p>
      <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">
        Details
      </a>
    </div>
  </div>
</div>