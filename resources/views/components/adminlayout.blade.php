<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin page panel</title>
       <link href="{{ asset('assets/admin.css') }}" rel="stylesheet" />
       
       
    </head>
    
    <body>
      
        {{ $slot }}
     
    </body>
</html>
