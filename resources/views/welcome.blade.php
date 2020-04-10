<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaraVue</title>

        <!-- Fonts -->
         <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
      <div id="app">
       <app-component></app-component>
      </div>
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>
