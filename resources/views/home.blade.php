<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <!-- Include main Header -->
        @include('partials.main-header')

        <main>
            <div class="container">
                <h1 class="title">Ciao</h1>
            </div>
        </main>
        <!-- Include main Footer -->
        @include('partials.main-footer')
    </body>
</html>
