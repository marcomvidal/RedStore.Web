<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ route('products.index') }}">Home</a>
    </li>

    @if (count($links) > 0)
      @foreach ($links as $linkTitle => $linkUrl)
        <li class="breadcrumb-item active" aria-current="page">
          <a href="{{ $linkUrl }}">{{ $linkTitle }}</a>
        </li>
      @endforeach
    @endif
  </ol>
</nav>