<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.nav')
    @if(Request::is('/'))
      @include('inc.showcase')
    @endif

    @include('inc.warnings')
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          @yield('content')
        </div>
        <div class="col-md-4">
          @include('inc.sidebar')
        </div>
      </div>
    </div>
    @include('inc.footer')

  </body>
</html>
