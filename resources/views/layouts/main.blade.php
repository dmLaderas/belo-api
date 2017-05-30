<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link href="https://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    @include('partials.header')
    <div class="container-fluid">
        <div class="row">
        @include('partials.sidebar')
        </div>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        @yield('content')
        </main>
    </div>
  </body>
</html>
