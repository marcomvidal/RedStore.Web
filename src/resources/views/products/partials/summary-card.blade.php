<div class="col-6 col-lg-2 mb-3">
    <div class="card product-listing__card">
      <a href="{{ route('products.show', $product->id) }}">
        <img src="{{ $product->getPicturePath() }}" class="card-img-top">
      </a>
      
      <div class="card-body text-center">
        <a href="{{ route('products.show', $product->id) }}" class="product-listing__link">
          <h6 class="card-title">{{ $product->name }}</h6>
        </a>
        <p class="card-text">{{ $product->getCurrencyPrice() }}</p>
      </div>
    </div>
  </a>
</div>