<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
  </head>
  <body>

    <header>
      @include('pages.partials.header')
    </header>

    <main>
      @yield('content')
    </main>

    <footer>
      @include('pages.partials.footer')
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
