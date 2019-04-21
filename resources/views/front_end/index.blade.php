<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="csrf-token" value="{{ csrf_token() }}" />
        <meta name="api-version" value="{{ config('app.api_version') }}" />
        <style type="text/css"> html, body {margin: 0; height: 100%; overflow: auto} </style>
    </head>
    <body class="fixed-left">

        <div id="app">
          <!-- <topbar></topbar>
          <sidebar></sidebar> -->
          <app></app>
          
        </div>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>