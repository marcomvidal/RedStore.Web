<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ route('products.index') }}">Home</a>
    </li>

    @foreach ($links as $linkTitle => $linkUrl)
      <li class="breadcrumb-item active" aria-current="page">
        @if ($linkUrl != end($links))
          <a href="{{ $linkUrl }}">{{ $linkTitle }}</a>
        @else
          {{ $linkTitle }}
        @endif
      </li>
    @endforeach
  </ol>
</nav>