<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Weibo App') -- Laravel教程</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
  @include('layouts._header')


  <div class="container offset-md-1 col-md-10">
      @yield('content')
      @include('layouts._footer')
  </div>
</body>
</html>