<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
       <div class="flex justify-center mt-10 flex-col items-center">
        <img src="{{ asset('/images/fixing.png') }}" alt="..."/>
        <h2 class="font-bold mt-5 uppercase text-xl">Засвартай</h2>
       </div>
    </body>
</html>
