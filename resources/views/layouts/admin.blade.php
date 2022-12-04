<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>{{ env('APP_NAME', 'Book Store') }}</title>
        <style>
            body {
                opacity: 0;
            }
        </style>
        <script src="/admin/js/settings.js"></script>
        <link href="/admin/css/light.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <div class="splash">
            <div class="splash-icon"></div>
        </div>

        <div class="wrapper">
            @include('layouts.admin-includes.sidebar')
            <div class="main">
              @include('layouts.admin-includes.navbar')
                <main class="content">
                    @yield('content')
                </main>
                @include('layouts.admin-includes.footer')
            </div>
        </div>

        <script src="/admin/js/app.js"></script>
        <script src="/admin/js/custom.js"></script>
        @yield('scripts')
    </body>
</html>
