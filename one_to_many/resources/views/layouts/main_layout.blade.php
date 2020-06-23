<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Employee - One to Many</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <header>
      @include('components.header')
    </header>
    <main>
      @yield('content')
    </main>
    <footer>
      @include('components.footer')
    </footer>
  </body>
</html>
