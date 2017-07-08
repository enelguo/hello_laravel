<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Sample App') - Laravel for Beginer</title>
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
      @include('layouts._header')
      <div class="container">
        <div class="col-md-offset-1 col-md-10">
          @yield('content')
          @include('layouts._footer')
        </div>
      </div>
    </body>
</html>
