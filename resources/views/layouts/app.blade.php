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

            <div class="callout medium">
                <div class="grid-x">
                    <div class="cell medium-4 medium-offset-4">
                        <div class="input-group">
                            <input type="text" class="input-group-field">
                            <div class="input-group-button">
                                <input type="submit" value="Search" class="button">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="grid-container">
                @yield('content')
            </div>
        </div>
    </body>

    <script src="{{ asset('js/app.js') }}"></script>
</html>
