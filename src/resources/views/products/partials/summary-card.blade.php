<div class="col-6 col-lg-2 mb-3">
    <div class="card summary-card__container">
      <div class="card-body">
        <div class="align-self-center">
          <a href="{{ route('products.show', $product->id) }}">
            <img src="{{ $product->getPicturePath() }}" class="card-img-top">
          </a>
        </div>
      
        <div class="text-center">
          <a href="{{ route('products.show', $product->id) }}" class="summary-card__link">
            <h6 class="card-title">{{ $product->name }}</h6>
          </a>
          <p class="card-text">{{ $product->getCurrencyPrice() }}</p>
        </div>
      </div>
    </div>
  </a>
</div>