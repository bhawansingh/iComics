<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>iComic - @yield('title')</title>
    <link rel="stylesheet" href={{ asset('css/foundation.css')}} />
    <link rel="stylesheet" href={{ asset('css/main.css')}} />
    <script src="js/vendor/modernizr.js"></script>
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

    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

    @yield('scripts')

  </body>
</html>
