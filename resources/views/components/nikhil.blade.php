<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@isset($title)
        {{$title}}-
        @endisset
        Laravel</title>

      
        <link href="{{ asset('assets/style.css') }}" rel="stylesheet" />
       
         <script src="{{ asset('dist/jquery.min.js') }}"></script>
  
  <script src="/eruda/eruda.js"></script>
<script>eruda.init();</script>

    </head>
      @include('components/NavBar')
    <body>
    
        
          
        {{ $slot }}
        
    
      
      @include('components/footer')
      
    
      <script src="{{ asset('assets/menu.js') }}"></script>
    </body>
</html>
