<!DOCTYPE html>
<html>
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inventory Control</title>
  </head>

  <body>
    <div class="container">
      @yield('content')
    </div>
    <script src="{{ asset('js/scripts.js') }}?{{ uniqid() }}"></script>
  </body>
</html>
