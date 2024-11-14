<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<title>@isset($title)
{{$title}}-@endisset Nikhil Roy</title>



 <link href="path/css/all.min.css" rel="stylesheet"/>
 <link href="{{ asset('assets/style.css') }}" rel="stylesheet" />
 
 
 
  <script src="{{ asset('/eruda/eruda.js') }}"></script>
<script>eruda.init();</script>

<script src="{{ asset('dist/jquery.min.js') }}"></script>
<script src="{{ asset('livewire.js') }}"></script>
 <script src="{{ asset('reverb.js') }}"></script>
 <script src="{{ asset('echo.js') }}"></script>
 <script src="{{ asset('assets/nikhil.js') }}"></script>
 

    </head>
    
      @include('components/NavBar')
    <body>
        {{ $slot }}
      
    </body>
       @include('components/footer')
    
    
    
    
      <script src="{{ asset('assets/menu.js') }}" defer></script>
     
</html>
