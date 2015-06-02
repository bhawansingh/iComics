<!doctype html>
<html class="no-js" lang="en" >
  <head>
      {{--Angular JS--}}
      <script src="{{asset("js/angular/angular.min.js")}}"></script>
      <script src="{{asset("js/angular/angular-route.min.js")}}"></script>
      <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular-route.js"></script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>iComic - @yield('title')</title>
    <link rel="stylesheet" href={{ asset('css/foundation.css')}} />
    <link rel="stylesheet" href={{ asset('css/main.css')}} />

  </head>
  <body>

    <nav class="top-bar navigation-top" data-topbar>
      <section class="top-bar-section">
        <ul class="right">
          <li><a href="#">Home</a></li>
          <li><a href="#">Discover</a></li>
          <li><a href="#">Comics</a></li>
          <li><a href="#">Movies</a></li>
          <li><a href="#">Social</a></li>
        </ul>
      </section>
    </nav>
    
    @yield('main')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src={{ asset("js/foundation.min.js") }}></script>
    <script src={{ asset("js/vendor/modernizr.js") }}></script>
    <script>
      $(document).foundation();
    </script>

    @yield('scripts')

  </body>
</html>
