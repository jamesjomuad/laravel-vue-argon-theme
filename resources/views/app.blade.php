<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
        <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <title>Laravel</title>
    </head>
    <body>
        <div id="app"></div>
        <script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>
    </body>
</html>
