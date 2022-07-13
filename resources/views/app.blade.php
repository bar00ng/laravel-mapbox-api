<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/0458c5e007.js" crossorigin="anonymous"></script>
  <title>Mapbox</title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="text-center text-white p-5 bg-black">
    <a href="{{route('index')}}" class="font-bold text-4xl tracking-wider">Mapbox</a>
  </div>

  @yield('content')

  @yield('script')
</body>
</html>