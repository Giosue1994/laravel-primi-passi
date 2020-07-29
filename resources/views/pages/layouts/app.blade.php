<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Boolean</title>
  </head>
  <body>

    @include('pages.partials.header')

    @yield('content')

    @include('pages.partials.footer')

  </body>
</html>
