<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
  </head>
  <body>
    @include ('partials._header')
      @yield('content')
    <script src="{{asset ('js/app.js')}}" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/122eaf82dd.js"></script>
  </body>
</html>
