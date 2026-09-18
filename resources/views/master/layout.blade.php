
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
        rel="stylesheet">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
        rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link
        href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- =====================================================
         GLOBAL LAYOUT FIX
    ====================================================== --}}
    <style>

        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 100%;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /*
        Main content takes available space.
        Footer stays at the bottom when content is short.
        */
        body > main {
            width: 100%;
            flex: 1 0 auto;
        }

        /*
        Prevent content from touching footer.
        */
        body > main > *:last-child {
            margin-bottom: 0;
        }

    </style>

</head>

<body>

    {{-- =====================================================
         NAVBAR
    ====================================================== --}}

    @include('clientside.navbar')


    {{-- =====================================================
         MAIN CONTENT
    ====================================================== --}}

    <main>
        @yield('content')
    </main>


    {{-- =====================================================
         FOOTER
    ====================================================== --}}

    @include('clientside.footer')


    {{-- =====================================================
         BACK TO TOP
    ====================================================== --}}

    <a href="#!"
       class="btn btn-lg btn-primary btn-lg-square back-to-top">

        <i class="bi bi-arrow-up"></i>

    </a>


    {{-- =====================================================
         JAVASCRIPT
    ====================================================== --}}

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>

    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>

    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>

    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>

    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

