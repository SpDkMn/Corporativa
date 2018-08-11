<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="content-language" content="en,es" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}"> 
  <title>Novoliz</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>

</head>
<body>
  <div id="app"></div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <!-- script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
  <script src="{{ asset('js/scrolloverflow.js') }}"></script>
  <script src="{{ asset('js/threesixty.min.js') }}"></script>
  <script src="{{ asset('js/fullpage.min.js') }}"></script>
  <script src="{{ asset('js/circular-carousel.js') }}"></script -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
