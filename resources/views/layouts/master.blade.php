<!DOCTYPE html>
<html>
<head>
    <title>PSM CAR</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="/assets/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="assets/css/flat-admin.css">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="/assets/css/theme/blue-sky.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/theme/blue.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/theme/red.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/theme/yellow.css">

    @yield('styles')

</head>
<body>
<div class="app app-default">

    @include('layouts.sidebar')

    <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
        <div class="dropdown-background">
            <div class="bg"></div>
        </div>
        <div class="dropdown-container">
            list
        </div>
    </script>
    <div class="app-container">

        @include('layouts.navbar')
        @yield('content')

        <footer class="app-footer">
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-copyright">
                        Copyright © 2017 PSM CAR.
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>

<script type="text/javascript" src="assets/js/vendor.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>

@yield('scripts')
</body>
</html>