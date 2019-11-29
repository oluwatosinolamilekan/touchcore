<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>Travel Mate - Index</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>
   @include('partials.css')
  </head>
  <body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    @include('partials.js')
  </body>
</html>