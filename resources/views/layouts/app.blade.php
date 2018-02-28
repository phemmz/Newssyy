<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>@yield('title')</title>
      <link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <div id="appendDivNews">
      <nav class="news-navbar">
        <a href="/" class="navbar-title">Newssyy</a>
      </nav>
        {{ csrf_field()}}
        @section('searchbox')
          <div class="form-container">
            <div class="form-wrapper">
              <input id="search-input" type="text" placeholder="Search here..." required>
              <button type="submit">Search</button>
            </div>
          </div>
        @show

        @yield('container')
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</html>
