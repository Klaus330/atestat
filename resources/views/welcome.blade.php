<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>Claudiu Popa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
         <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs/dist/tf.min.js"> </script>

    </head>
    <body>
    <div id="app">
        {{-- <color-changer></color-changer> --}}
        <image-prediction width="640" height="480"></image-prediction>
        {{-- <webcam-recognizer width="640" height="480"></webcam-recognizer> --}}
        {{-- <web-game width="640" height="480"></web-game> --}}
        {{-- <example-component></example-component> --}}
    </div>

    <script src="js/app.js"></script>

    </body>
</html>
