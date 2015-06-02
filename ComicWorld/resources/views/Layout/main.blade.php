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

    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name"></li>
        <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
      </ul>
      <section class="top-bar-section">
        <ul>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Comics</a></li>
          <li><a href="#">Movies</a></li>
          <li><a href="#">Discover</a></li>
          <li><a href="#">Social</a></li>
        </ul>
      </section>
    </nav>
    
    <div class="wrapper_search fullwidth">
    @yield('content')
    </div>

<<<<<<< HEAD
    
    <footer class="row fullWidth">
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>


    </footer>



    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
=======

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src={{ asset("js/foundation.min.js") }}></script>
    <script src={{ asset("js/vendor/modernizr.js") }}></script>
>>>>>>> bhawan
    <script>
      $(document).foundation();
    </script>

    @yield('scripts')

  </body>
</html>
