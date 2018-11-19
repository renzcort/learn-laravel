<!DOCTYPE html>
<html>
<head>
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
</body>
</html>