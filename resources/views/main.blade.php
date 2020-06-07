<!doctype html>
@include('Partials._head')
<html lang="en">
  <body>
      @include('Partials._navbar')
        <div class="container">
            @yield('content')
            @include('Partials._footer')
        </div>

        @yield('scripts')
  </body>
</html>