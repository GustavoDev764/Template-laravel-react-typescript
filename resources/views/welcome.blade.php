<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="url_site" content="{{url('')}}" />

     <!--================FAVICON==============-->
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/logo/icon.ico" type="image/x-icon') }}">
   
     <meta
      name="description"
      content="Web site created using create-react-app"
    />
    <!-- Boostrap 4.5.0 -->    
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

    <!-- FONTS -->  
    <!-- FONTS 4.3.0 -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"/>

    <!-- FONTS 4.2.0 -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>

    <!-- FONTS 5.8.2 -->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}"/>

    <!-- MY STYLE -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>

    <!-- MY APP -->
    <script src="{{asset('js/app.js')}}" defer></script>

    <title>Painel Administrativo</title>
  </head>
  <body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root"></div>


    <!-- jQuery, Popper.js, and Bootstrap JS  -->  
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>  
    <script src="{{asset('js/popper.min.js')}}"></script>  
    <script src="{{asset('js/bootstrap.min.js')}}"></script> 
  </body>
</html>
