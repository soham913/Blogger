<!doctype html>
@include('Partials._head')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
      @include('Partials._navbar')
        <div class="container">
            @yield('content')
            @include('Partials._footer')
        </div>

        @yield('scripts')
  </body>
</html>