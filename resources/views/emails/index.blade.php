<!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app ()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="witdth=device-width,initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Emails</title>

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
    <h1>Contacto</h1>
       <p><strongs>Nombre: </strong>{{ $contacto['name'] }}</p> 
       <p><strongs>Email: </strong>{{ $contacto['name'] }}</p> 
       <p><strongs>Mensaje: </strong>{{ $contacto['name'] }}</p> 
    
    </body>
    </html>