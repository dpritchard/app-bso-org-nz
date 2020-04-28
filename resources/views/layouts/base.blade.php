<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Botanical Society of Otago</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="d-flex justify-content-between justify-content-md-between align-items-center mt-2">
                <a href="{{ url('/') }}">
                    <img class="banner-logo" src="{{ asset('img/logo_web_no_text.png') }}">
                </a>
                <div>
                    <span class="d-none d-md-inline banner-text">Botanical Society of Otago</span>
                    <span class="d-md-none banner-text">BSO</span>
                </div>
                <div class="menu-toggle">
                    <button class="btn btn-outline-dark d-md-none" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="true" aria-label="Toggle docs navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>

            @yield('main')

        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('extra_js')
</body>

</html>
