<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Weibo App') -- Laravel教程</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
  @include('layouts._header')

  <div class="bg_img">

      <div class="container offset-md-2 col-md-8">
          @include('shared._message')
          @yield('content')
          @include('layouts._footer')
      </div>
  </div>
</body>
</html>