<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'GURU NIWASA LMS ') }}</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
         rel="stylesheet">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
           <link rel="stylesheet" href="{{asset('themes/default/css/hover.css')}}">
      <link rel="stylesheet" href="{{asset('themes/default/css/custom-css-N.css')}}">
   </head>
   <body>
      @include('web.layouts.headers.header')
      @yield('content')
      @include('web.layouts.footers.footer')
      @yield('scripts')
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"  ></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
   </body>

   
<script>
    document.getElementById('flexSwitchCheckDefault').addEventListener('change', function () {
      const toggleDiv = document.getElementById('advaceMenuList');
      const toggleDiv1 = document.getElementById('basicMenuList');
      if (this.checked) {
        toggleDiv.classList.remove('d-none');
        toggleDiv.classList.add('d-block');
        toggleDiv1.classList.add('d-none');
      } else {
        toggleDiv.classList.remove('d-block');
        toggleDiv.classList.add('d-none');
        toggleDiv1.classList.remove('d-none');
      }
    });
  </script>

</html>