
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
        /* =========================================================
   SERVICE CARD
========================================================= */

.service-card {
    height: 100%;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    position: relative;

    transition: transform 0.35s ease, box-shadow 0.35s ease;
}


/* =========================================================
   SERVICE IMAGE
========================================================= */

.service-card-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
    display: block;

    transition: transform 0.5s ease;
}


/* =========================================================
   SERVICE CONTENT
========================================================= */

.service-content {
    position: relative;

    min-height: 270px;

    padding: 24px;

    box-sizing: border-box;

    display: flex;
    flex-direction: column;

    overflow: hidden;
}


/* =========================================================
   TITLE
========================================================= */

.service-title {
    margin: 0 0 12px 0;

    color: #212529;

    font-weight: 700;

    line-height: 1.3;
}


/* =========================================================
   DESCRIPTION
========================================================= */

.service-description {
    margin: 0;

    color: #6c757d;

    line-height: 1.6;

    /* Keep description clear of the button */
    padding-bottom: 50px;

    /* Trim very long text instead of letting it overflow */
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    overflow: hidden;
}


/* =========================================================
   BUTTON AREA
   Default state = VISIBLE.
   This is what touch devices (phones, tablets) get,
   because they have no mouse hover.
========================================================= */

.service-button-area {
    position: absolute;

    left: 0;
    right: 0;

    bottom: 24px;

    width: 100%;

    display: flex;

    align-items: center;

    justify-content: center;

    text-align: center;

    opacity: 1;

    transform: translateY(0);

    pointer-events: auto;

    z-index: 20;

    transition:
        bottom 0.45s cubic-bezier(0.22, 1, 0.36, 1),
        opacity 0.3s ease,
        transform 0.45s cubic-bezier(0.22, 1, 0.36, 1);
}


/* =========================================================
   MOUSE DEVICES ONLY
   Laptops / desktops with a real pointer get the
   hide-then-slide-up-on-hover behaviour.
   Touch devices never match this block, so the button
   simply stays visible there — no tap required.
========================================================= */

@media (hover: hover) and (pointer: fine) {

    /* Card lift */
    .service-card:hover {
        transform: translateY(-5px);

        box-shadow:
            0 15px 35px rgba(0, 0, 0, 0.12) !important;
    }

    /* Image zoom */
    .service-card:hover .service-card-image {
        transform: scale(1.03);
    }

    /* Button hidden below the card */
    .service-button-area {
        bottom: -70px;

        opacity: 0;

        transform: translateY(25px);

        pointer-events: none;
    }

    /* Button slides up when the mouse enters the card */
    .service-card:hover .service-button-area,
    .service-card:focus-within .service-button-area {
        bottom: 24px;

        opacity: 1;

        transform: translateY(0);

        pointer-events: auto;
    }

}


/* =========================================================
   LEARN MORE BUTTON
========================================================= */

.learn-more-btn {

    width: 140px;

    height: 45px;

    padding: 0;

    display: inline-flex !important;

    align-items: center !important;

    justify-content: center !important;

    gap: 7px;

    background-color: #13c5dd;

    color: #ffffff !important;

    border: none;

    border-radius: 50px;

    text-decoration: none !important;

    font-size: 15px;

    font-weight: 600;

    line-height: 1;

    box-sizing: border-box;

    position: relative;

    z-index: 10;

    box-shadow:
        0 7px 18px rgba(19, 197, 221, 0.25);

    transition:
        background-color 0.3s ease,
        transform 0.3s ease,
        box-shadow 0.3s ease;
}


.learn-more-btn span {
    display: inline-block;

    white-space: nowrap;
}


.learn-more-btn i {
    display: inline-block;

    font-size: 15px;

    line-height: 1;

    flex-shrink: 0;

    transition: transform 0.3s ease;
}


.learn-more-btn:hover,
.learn-more-btn:focus {

    color: #ffffff !important;

    text-decoration: none !important;

    background-color: #0fb1c8;

    transform: translateY(-3px);

    box-shadow:
        0 10px 22px rgba(19, 197, 221, 0.35);
}


.learn-more-btn:hover i {
    transform: translateX(5px);
}


/* =========================================================
   REDUCED MOTION
========================================================= */

@media (prefers-reduced-motion: reduce) {

    .service-card,
    .service-card-image,
    .service-button-area,
    .learn-more-btn,
    .learn-more-btn i {
        transition: transform 0.3s ease !important;
    }

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

