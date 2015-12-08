<!DOCTYPE html>

<html lang="en">

   <head>
      <meta charset="UTF-8">
      <title>@yield('title')</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}" />
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/fontello.css') }}" />
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}" />
   </head>

   <body>

      <div class="container">

         <div class="navigation">
            @yield('navigation')
         </div>

         <div class="row align-center">
            <div class="col-xs-12">
               <h2>@yield('heading')</h2>
            </div>
         </div>

         <div class="main">
            @yield('content')
         </div>
         
         <script type="text/javascript" src="js/jquery.min.js"></script>
         @yield('jquery')

      </div>

   </body>

</html>
