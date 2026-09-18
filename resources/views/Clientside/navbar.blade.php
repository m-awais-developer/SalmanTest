{{-- ------------------------------------------ --}}
{{-- 1. TOPBAR SECTION                          --}}
{{-- ------------------------------------------ --}}

<div class="container-fluid py-2 border-bottom topbar d-none d-lg-block">

    <div class="container">

        <div class="row align-items-center">

            {{-- Contact Information --}}
            <div class="col-lg-6 text-center text-lg-start">

                <div class="d-inline-flex align-items-center flex-wrap">

                    <a
                        class="text-decoration-none text-body pe-3 topbar-link"
                        href="tel:{{ $setting?->phone }}"
                    >
                        <i class="bi bi-telephone me-2"></i>
                        {{ $setting?->phone }}
                    </a>

                    <span class="text-body topbar-divider">|</span>

                    <a
                        class="text-decoration-none text-body px-3 topbar-link"
                        href="mailto:{{ $setting?->email }}"
                    >
                        <i class="bi bi-envelope me-2"></i>
                        {{ $setting?->email }}
                    </a>

                </div>

            </div>


            {{-- Social Media --}}
            <div class="col-lg-6 text-center text-lg-end">

                <div class="d-inline-flex align-items-center">

                    <a class="text-body px-2 social-link" href="#!">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a class="text-body px-2 social-link" href="#!">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a class="text-body px-2 social-link" href="#!">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <a class="text-body px-2 social-link" href="#!">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a class="text-body ps-2 social-link" href="#!">
                        <i class="fab fa-youtube"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- ------------------------------------------ --}}
{{-- 2. MAIN NAVIGATION BAR                    --}}
{{-- ------------------------------------------ --}}

<div class="container-fluid sticky-top bg-white shadow-sm main-navbar">

    <div class="container">

        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">


            {{-- ------------------------------------------ --}}
            {{-- WEBSITE LOGO / BRAND                       --}}
            {{-- ------------------------------------------ --}}

            <a
                href="{{ route('home') }}"
                class="navbar-brand navbar-logo"
            >

                @if(!empty($setting?->logo))

                    <img
                        src="{{ asset('storage/settings/' . basename($setting->logo)) }}"
                        alt="Website Logo"
                    >

                @else

                    <h1 class="m-0 text-uppercase text-primary">
                        <i class="fa fa-clinic-medical me-2"></i>
                        Medinova
                    </h1>

                @endif

            </a>


            {{-- ------------------------------------------ --}}
            {{-- MOBILE NAVIGATION TOGGLE                   --}}
            {{-- ------------------------------------------ --}}

            <button
                class="navbar-toggler custom-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>


            {{-- ------------------------------------------ --}}
            {{-- MAIN NAVIGATION MENU                       --}}
            {{-- ------------------------------------------ --}}

            <div
                class="collapse navbar-collapse"
                id="navbarCollapse"
            >

                <div class="navbar-nav ms-auto py-0">


                    {{-- HOME --}}
                    <a
                        href="{{ route('home') }}"
                        class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                    >
                        Home
                    </a>


                    {{-- ABOUT --}}
                    <a
                        href="{{ route('about') }}"
                        class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                    >
                        About
                    </a>


                    {{-- SERVICES --}}
                    <a
                        href="{{ route('services') }}"
                        class="nav-item nav-link {{ request()->routeIs('services') ? 'active' : '' }}"
                    >
                        Service
                    </a>


                    {{-- PRICING --}}
                    <a
                        href="{{ route('pricing') }}"
                        class="nav-item nav-link {{ request()->routeIs('pricing') ? 'active' : '' }}"
                    >
                        Pricing
                    </a>


                    {{-- BLOG --}}
                    <a
                        href="{{ route('blog') }}"
                        class="nav-item nav-link {{ request()->routeIs('blog') ? 'active' : '' }}"
                    >
                        Blog
                    </a>


                    {{-- CONTACT --}}
                    <a
                        href="{{ route('contact') }}"
                        class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                    >
                        Contact
                    </a>

                </div>

            </div>

        </nav>

    </div>

</div>


{{-- ========================================================= --}}
{{-- RESPONSIVE CSS ONLY                                       --}}
{{-- ========================================================= --}}

<style>

/* =========================================================
   NAVBAR BASE
========================================================= */

.main-navbar {
    position: sticky;
    top: 0;
    z-index: 1030;
    width: 100%;
}


/* =========================================================
   LOGO
========================================================= */

.navbar-logo {
    display: flex;
    align-items: center;
    min-width: 0;
    padding-top: 0;
    padding-bottom: 0;
}


.navbar-logo img {
    display: block;
    width: auto;
    max-width: 240px;
    max-height: 50px;
    object-fit: contain;
}


/* =========================================================
   NAV LINKS
========================================================= */

.main-navbar .nav-link {
    white-space: nowrap;
    transition: color 0.25s ease, background-color 0.25s ease;
}


/* =========================================================
   SOCIAL ICONS
========================================================= */

.social-link {
    transition: color 0.2s ease, transform 0.2s ease;
}


.social-link:hover {
    color: #13c5dd !important;
    transform: translateY(-2px);
}


/* =========================================================
   TOPBAR
========================================================= */

.topbar-link {
    white-space: nowrap;
}


.topbar-divider {
    user-select: none;
}


/* =========================================================
   TOGGLER
========================================================= */

.custom-toggler {
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
    padding: 7px 9px;
}


.custom-toggler:focus,
.custom-toggler:active {
    outline: none !important;
    box-shadow: none !important;
}


/* =========================================================
   LARGE DESKTOP
========================================================= */

@media (min-width: 1200px) {

    .navbar-logo img {
        max-width: 240px;
        max-height: 50px;
    }

}


/* =========================================================
   LAPTOP / SMALL DESKTOP
========================================================= */

@media (max-width: 1199px) {

    .navbar-logo img {
        max-width: 210px;
        max-height: 45px;
    }


    .main-navbar .nav-link {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }

}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .main-navbar .navbar {
        padding-top: 12px !important;
        padding-bottom: 12px !important;
    }


    .navbar-logo img {
        max-width: 190px;
        max-height: 42px;
    }


    /* MOBILE COLLAPSE */

    #navbarCollapse {
        width: 100%;
    }


    #navbarCollapse .navbar-nav {
        width: 100%;
        margin-left: 0 !important;
        padding: 12px 0 5px;
    }


    #navbarCollapse .nav-link {
        width: 100%;
        display: block;

        padding: 12px 15px !important;

        margin-bottom: 3px;

        border-radius: 6px;

        text-align: left;

        white-space: normal;
    }


    #navbarCollapse .nav-link:hover {
        background-color: #f1fbfd;
        color: #13c5dd !important;
    }


    #navbarCollapse .nav-link.active {
        background-color: #13c5dd;
        color: #ffffff !important;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .main-navbar .container {
        width: 100%;
        max-width: 100%;
        padding-left: 15px;
        padding-right: 15px;
    }


    .main-navbar .navbar {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
    }


    .navbar-logo {
        max-width: calc(100% - 55px);
    }


    .navbar-logo img {
        max-width: 175px;
        max-height: 40px;
    }


    .navbar-brand h1 {
        font-size: 25px !important;
        white-space: nowrap;
    }


    .custom-toggler {
        flex-shrink: 0;
        padding: 6px 8px;
    }


    #navbarCollapse .navbar-nav {
        padding-top: 12px;
    }


    #navbarCollapse .nav-link {
        font-size: 15px;
        padding: 11px 14px !important;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 480px) {

    .main-navbar .container {
        padding-left: 12px;
        padding-right: 12px;
    }


    .main-navbar .navbar {
        padding-top: 9px !important;
        padding-bottom: 9px !important;
    }


    .navbar-logo img {
        max-width: 145px;
        max-height: 36px;
    }


    .navbar-brand h1 {
        font-size: 21px !important;
    }


    .custom-toggler {
        padding: 5px 7px;
    }


    #navbarCollapse .nav-link {
        font-size: 14px;
        padding: 10px 12px !important;
    }

}


/* =========================================================
   VERY SMALL MOBILE
========================================================= */

@media (max-width: 360px) {

    .main-navbar .container {
        padding-left: 10px;
        padding-right: 10px;
    }


    .navbar-logo img {
        max-width: 125px;
        max-height: 34px;
    }


    .navbar-brand h1 {
        font-size: 18px !important;
    }


    .custom-toggler {
        padding: 4px 6px;
    }


    #navbarCollapse .nav-link {
        font-size: 14px;
        padding: 9px 11px !important;
    }

}


/* =========================================================
   EXTRA SMALL DEVICES
========================================================= */

@media (max-width: 320px) {

    .navbar-logo img {
        max-width: 110px;
        max-height: 31px;
    }


    .navbar-brand h1 {
        font-size: 17px !important;
    }


    .custom-toggler {
        padding: 3px 5px;
    }

}

</style>