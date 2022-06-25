<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  @include('layouts.partials.imports')
</head>
<body>
  <div id="app">
    @include('layouts.partials.navbar')

    <main class="py-4">
      <section class="container">
        @yield('content')
      </section>
    </main>
  </div>
</body>
</html>
