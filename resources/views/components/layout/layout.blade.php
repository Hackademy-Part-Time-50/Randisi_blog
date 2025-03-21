<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>{{$title ?? config('app.name') }}</title>

            <!-- CDN di BootStrap Aggiunta con Vite -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            
        </head>   

        <body>
            <x-navbar />
            {{$slot}} 
        </body>
    </html>    