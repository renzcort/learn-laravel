<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/css/main.css">
  <title>@yield('title')</title>
</head>
<body>
  <header>
    <nav>
      <a href="">Home</a>
      <a href="/blog">Blogs</a>
    </nav>
  </header>
  @yield('content')
  <footer>
    &copy; Renzcort
  </footer>

  <script type="text/javascript" src="/js/main.js"></script>
</body>
</html>