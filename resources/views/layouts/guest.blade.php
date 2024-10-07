<html lang="en" class="h-100" data-bs-theme="dark" data-topbar-color="light" data-menu-color="dark"
    data-menu-size="hidden">

<head>
    <!-- Title Meta -->
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully responsive premium admin dashboard template">
    <meta name="author" content="Techzaa">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/favicon.ico">

    <!-- Vendor css (Require in all Page) -->
    <link href="{{ url('/') }}/assets/css/vendor.min.css" rel="stylesheet" type="text/css">

    <!-- Icons css (Require in all Page) -->
    <link href="{{ url('/') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css">

    <!-- App css (Require in all Page) -->
    <link href="{{ url('/') }}/assets/css/app.min.css" rel="stylesheet" type="text/css">

    <!-- Theme Config js (Require in all Page) -->
    <script src="{{ url('/') }}/assets/js/config.js"></script>
    <style type="text/css" data-href="lib\style.css">
        .star-rating {
            width: 0;
            position: relative;
            display: inline-block;
            background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDguOSIgaGVpZ2h0PSIxMDMuNiIgdmlld0JveD0iMCAwIDEwOC45IDEwMy42Ij48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6I2UzZTZlNjt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPnN0YXJfMDwvdGl0bGU+PGcgaWQ9IkxheWVyXzIiIGRhdGEtbmFtZT0iTGF5ZXIgMiI+PGcgaWQ9IkxheWVyXzEtMiIgZGF0YS1uYW1lPSJMYXllciAxIj48cG9seWdvbiBjbGFzcz0iY2xzLTEiIHBvaW50cz0iMTA4LjkgMzkuNiA3MS4zIDM0LjEgNTQuNCAwIDM3LjYgMzQuMSAwIDM5LjYgMjcuMiA2Ni4xIDIwLjggMTAzLjYgNTQuNCA4NS45IDg4LjEgMTAzLjYgODEuNyA2Ni4xIDEwOC45IDM5LjYiLz48L2c+PC9nPjwvc3ZnPg0K);
            background-position: 0 0;
            background-repeat: repeat-x;
            cursor: pointer;
        }

        .star-rating .star-value {
            position: absolute;
            height: 100%;
            width: 100%;
            background: url('data:image/svg+xml;base64,PHN2Zw0KCXhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwOC45IiBoZWlnaHQ9IjEwMy42IiB2aWV3Qm94PSIwIDAgMTA4LjkgMTAzLjYiPg0KCTxkZWZzPg0KCQk8c3R5bGU+LmNscy0xe2ZpbGw6I2YxYzk0Nzt9PC9zdHlsZT4NCgk8L2RlZnM+DQoJPHRpdGxlPnN0YXIxPC90aXRsZT4NCgk8ZyBpZD0iTGF5ZXJfMiIgZGF0YS1uYW1lPSJMYXllciAyIj4NCgkJPGcgaWQ9IkxheWVyXzEtMiIgZGF0YS1uYW1lPSJMYXllciAxIj4NCgkJCTxwb2x5Z29uIGNsYXNzPSJjbHMtMSIgcG9pbnRzPSI1NC40IDAgNzEuMyAzNC4xIDEwOC45IDM5LjYgODEuNyA2Ni4xIDg4LjEgMTAzLjYgNTQuNCA4NS45IDIwLjggMTAzLjYgMjcuMiA2Ni4xIDAgMzkuNiAzNy42IDM0LjEgNTQuNCAwIi8+DQoJCTwvZz4NCgk8L2c+DQo8L3N2Zz4NCg==');
            background-repeat: repeat-x;
        }

        .star-rating.disabled {
            cursor: default;
        }

        .star-rating.is-busy {
            cursor: wait;
        }

        .star-rating .star-value.rtl {
            -moz-transform: scaleX(-1);
            -o-transform: scaleX(-1);
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
            filter: FlipH;
            -ms-filter: "FlipH";
            right: 0;
            left: auto;
        }
    </style>
</head>

<body class="h-100">
    <div class="d-flex flex-column h-100 p-3">

        <div class="d-flex flex-column flex-grow-1">
            <div class="row h-100">
                <div class="col-xxl-7">
                    <div class="row justify-content-center h-100">
                        <div class="col-lg-6 py-lg-5">
                            <div class="d-flex flex-column h-100 justify-content-center">
                                <div class="auth-logo mb-4">
                                    <a href="index.html" class="logo-dark">
                                        <img src="assets/images/logo-dark.png" height="24" alt="logo dark">
                                    </a>

                                    <a href="{{ route('welcome') }}" class="logo-light">
                                        <img src="assets/images/logo-light.png" height="24" alt="logo light">
                                    </a>
                                </div>
                                {{ $slot }}

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-5 d-none d-xxl-flex">
                    <div class="card h-100 mb-0 overflow-hidden">
                        <div class="d-flex flex-column h-100">
                            <img src="assets/images/small/img-10.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor Javascript (Require in all Page) -->
    <script src="{{ url('/') }}/assets/js/vendor.js"></script>

    <!-- App Javascript (Require in all Page) -->
    <script src="{{ url('/') }}/assets/js/app.js"></script>



    <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg>
</body>

</html>
