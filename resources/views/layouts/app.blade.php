<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <div id="app">
            <div class="top-bar">
                <div class="top-bar-left">
                    <ul class="menu">
                        <li class="menu-text">
                            Directory of Open Access Journals
                        </li>
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="menu">
                        <li><a href="{{ route('journals.index') }}">Home</a></li>
                    </ul>
                </div>
            </div>

            <div class="row column">
                <hr>
            </div>
    
            <div class="grid-container">
                @yield('content')
            </div>

            <div class="row column">
                <hr>
            </div>
        </div>
    </body>

    <script src="{{ asset('js/app.js') }}"></script>
</html>
