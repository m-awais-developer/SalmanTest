<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>


    <!-- Bootstrap 5 -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">


    <!-- Bootstrap Icons -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <style>

        :root {
            --primary: #6c5ce7;
            --primary-dark: #5848d6;
            --sidebar: #17172b;
            --body-bg: #f5f6fa;
            --text-dark: #25243a;
        }


        * {
            box-sizing: border-box;
        }


        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 100%;
        }


        /*
        |--------------------------------------------------------------------------
        | BODY
        |--------------------------------------------------------------------------
        */

        body {
            background: var(--body-bg);
            color: var(--text-dark);
            font-family: Arial, Helvetica, sans-serif;

            min-height: 100vh;

            display: flex;
            flex-direction: column;
        }


        /*
        |--------------------------------------------------------------------------
        | TOP NAVBAR
        |--------------------------------------------------------------------------
        */

        .top-navbar {
            height: 70px;

            background: #fff;

            border-bottom: 1px solid #e9e9ef;

            position: fixed;

            top: 0;
            left: 0;
            right: 0;

            z-index: 1000;
        }


        .brand {
            color: var(--primary);

            font-size: 24px;

            font-weight: 800;

            text-decoration: none;
        }


        .brand span {
            color: #25243a;
        }


        .search-box {
            width: 300px;
        }


        .search-box input {
            background: #f5f6fa;

            border: none;

            border-radius: 10px;

            padding: 11px 15px;
        }


        .search-box input:focus {
            box-shadow: 0 0 0 2px rgba(108, 92, 231, .15);
        }


        .profile-img {
            width: 42px;
            height: 42px;

            border-radius: 50%;

            background: linear-gradient(
                135deg,
                #6c5ce7,
                #00cec9
            );

            color: #fff;

            display: flex;

            align-items: center;
            justify-content: center;

            font-weight: bold;
        }


        /*
        |--------------------------------------------------------------------------
        | SIDEBAR
        |--------------------------------------------------------------------------
        */

        .sidebar {
            position: fixed;

            top: 70px;
            left: 0;

            width: 250px;

            height: calc(100vh - 70px);

            background: var(--sidebar);

            padding: 25px 15px;

            overflow-y: auto;

            z-index: 999;

            transition: left .3s ease;
        }


        .sidebar-title {
            color: #777793;

            font-size: 11px;

            text-transform: uppercase;

            letter-spacing: 1px;

            padding: 10px 15px;

            font-weight: bold;
        }


        .sidebar .nav-link {
            color: #aaaac1;

            padding: 13px 15px;

            margin: 4px 0;

            border-radius: 10px;

            display: flex;

            align-items: center;

            gap: 12px;

            transition: .2s;
        }


        .sidebar .nav-link i {
            font-size: 18px;
        }


        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: #fff;

            background: var(--primary);
        }


        /*
        |--------------------------------------------------------------------------
        | MAIN PAGE WRAPPER
        |--------------------------------------------------------------------------
        |
        | IMPORTANT:
        | min-height + flex-direction ensures that footer stays at
        | the bottom when page content is short.
        |
        */

        .main-layout-wrapper {

            width: 100%;

            margin-top: 70px;

            display: flex;

            flex-direction: column;

            flex: 1 0 auto;

            min-height: calc(100vh - 70px);
        }


        /*
        |--------------------------------------------------------------------------
        | MAIN CONTENT
        |--------------------------------------------------------------------------
        */

        .main-content {

            width: calc(100% - 250px);

            margin-left: 250px;

            padding: 40px 30px;

            min-width: 0;

            flex: 1 0 auto;

            /*
            Extra space at bottom so content/card never touches footer.
            */
            padding-bottom: 70px;
        }


        /*
        |--------------------------------------------------------------------------
        | CONTENT CONTAINER
        |--------------------------------------------------------------------------
        */

        .main-content .container-fluid {

            width: 100%;

            max-width: 100%;

            margin: 0;
        }


        .main-content .card {
            max-width: 100%;
        }


        /*
        |--------------------------------------------------------------------------
        | TABLE
        |--------------------------------------------------------------------------
        */

        .table {
            margin-bottom: 0;
        }


        .table th {

            color: #85859a;

            font-size: 12px;

            text-transform: uppercase;

            border-bottom: 1px solid #eee;
        }


        .table td {

            padding-top: 18px;

            padding-bottom: 18px;

            vertical-align: middle;

            border-color: #f0f0f4;
        }


        /*
        |--------------------------------------------------------------------------
        | FOOTER
        |--------------------------------------------------------------------------
        |
        | IMPORTANT:
        | Footer is OUTSIDE main-layout-wrapper.
        | margin-top:auto pushes it to the bottom of the viewport.
        |
        */

        .footer {

            width: calc(100% - 250px);

            margin-left: 250px;

            background: #fff;

            border-top: 1px solid #e9e9ef;

            padding: 20px 30px;

            color: #88889b;

            font-size: 13px;

            margin-top: auto;

            flex-shrink: 0;

            /*
            Ensures footer has clear separation from page content.
            */
            position: relative;

            z-index: 10;
        }


        /*
        |--------------------------------------------------------------------------
        | SIDEBAR TOGGLE
        |--------------------------------------------------------------------------
        */

        .sidebar-toggle {

            display: none;

            border: none;

            background: #f5f6fa;

            color: var(--text-dark);

            width: 40px;
            height: 40px;

            border-radius: 8px;

            align-items: center;

            justify-content: center;
        }


        /*
        |--------------------------------------------------------------------------
        | TABLET / LAPTOP
        |--------------------------------------------------------------------------
        */

        @media (max-width: 1000px) {

            .sidebar {

                left: -250px;

                box-shadow: 5px 0 20px rgba(0, 0, 0, .15);
            }


            .sidebar.show {
                left: 0;
            }


            .sidebar-toggle {
                display: flex;
            }


            .main-content {

                width: 100%;

                margin-left: 0;

                padding-bottom: 70px;
            }


            .footer {

                width: 100%;

                margin-left: 0;
            }

        }


        /*
        |--------------------------------------------------------------------------
        | MOBILE
        |--------------------------------------------------------------------------
        */

        @media (max-width: 576px) {

            .top-navbar {

                padding-left: 15px !important;

                padding-right: 15px !important;
            }


            .brand {
                font-size: 20px;
            }


            .profile-img {

                width: 38px;

                height: 38px;
            }


            .search-box {
                display: none;
            }


            .page-title {
                font-size: 23px;
            }


            .main-content {

                padding: 30px 15px 60px;
            }


            .nav-link.active {

                background-color: #6c5ce7 !important;

                color: #fff !important;
            }


            .footer {

                padding: 18px 15px;

                text-align: center;
            }

        }

    </style>

</head>


<body>


    <!--
    |--------------------------------------------------------------------------
    | TOP NAVBAR
    |--------------------------------------------------------------------------
    -->

    <nav
        class="top-navbar d-flex align-items-center justify-content-between px-4">


        <div class="d-flex align-items-center gap-2">


            <!-- Sidebar Toggle -->

            <button
                type="button"
                class="sidebar-toggle"
                id="sidebarToggle"
                aria-label="Toggle Sidebar">

                <i class="bi bi-list fs-4"></i>

            </button>


            <a href="#" class="brand">

                Admin<span>Panel</span>

            </a>

        </div>


        <div class="search-box">

            <input
                type="text"
                class="form-control"
                placeholder="Search...">

        </div>


        <div class="profile-img">

            A

        </div>

    </nav>


    <!--
    |--------------------------------------------------------------------------
    | MAIN LAYOUT
    |--------------------------------------------------------------------------
    -->

    <div class="main-layout-wrapper">


        <!--
        |--------------------------------------------------------------------------
        | SIDEBAR
        |--------------------------------------------------------------------------
        -->

        <aside
            class="sidebar"
            id="sidebar">


            <div class="sidebar-title">

                Main Menu

            </div>


            <nav class="nav flex-column">


                <a
                    href="{{ route('dashboard.home') }}"
                    class="nav-link {{ Route::is('dashboard.home') ? 'active' : '' }}">

                    <i class="bi bi-grid-1x2-fill"></i>

                    Dashboard

                </a>


                <a
                    href="{{ route('admin.blogs.create') }}"
                    class="nav-link {{ Route::is('admin.blogs.create') ? 'active' : '' }}">

                    <i class="bi bi-journal-plus"></i>

                    Add Blog

                </a>


                <a
                    href="{{ route('admin.blogs.manage') }}"
                    class="nav-link {{ Route::is('admin.blogs.manage') ? 'active' : '' }}">

                    <i class="bi bi-file-earmark-text"></i>

                    Manage Blogs

                </a>


                <a
                    href="{{ route('admin.services.create') }}"
                    class="nav-link {{ Route::is('admin.services.create') ? 'active' : '' }}">

                    <i class="bi bi-plus-circle"></i>

                    Add Service

                </a>


                <a
                    href="{{ route('admin.service.manage') }}"
                    class="nav-link {{ Route::is('admin.services.manage') ? 'active' : '' }}">

                    <i class="bi bi-heart-pulse"></i>

                    Manage Services

                </a>


                <a
                    href="{{ route('admin.website.settings') }}"
                    class="nav-link {{ Route::is('admin.website.settings') ? 'active' : '' }}">

                    <i class="bi bi-gear-wide-connected"></i>

                    Settings

                </a>

            </nav>


            <div class="sidebar-title mt-4">

                Management

            </div>


            <nav class="nav flex-column">


                <a
                    href="{{ route('admin.contacts') }}"
                    class="nav-link {{ Route::is('admin.contacts') ? 'active' : '' }}">

                    <i class="bi bi-envelope"></i>

                    Contact List

                </a>


                <a href="#" class="nav-link">

                    <i class="bi bi-credit-card"></i>

                    Payments

                </a>


                <a href="#" class="nav-link">

                    <i class="bi bi-person-badge"></i>

                    Staff

                </a>


                <a href="#" class="nav-link">

                    <i class="bi bi-gear"></i>

                    Settings

                </a>

<form action="{{ route('logout') }}" method="POST" class="m-0">
    @csrf

    <button type="submit"
            class="nav-link text-danger border-0 bg-transparent w-100 text-start">

        <i class="bi bi-box-arrow-right"></i>

        Logout

    </button>
</form>
            </nav>

        </aside>


        <!--
        |--------------------------------------------------------------------------
        | PAGE CONTENT
        |--------------------------------------------------------------------------
        -->

        <main class="main-content">

            @yield('content')

        </main>

    </div>


    <!--
    |--------------------------------------------------------------------------
    | FOOTER
    |--------------------------------------------------------------------------
    -->

    <footer class="footer">

        &copy; {{ date('Y') }} Admin Dashboard. All Rights Reserved.

    </footer>


    <!-- Bootstrap JavaScript -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>


    <!-- Sidebar Script -->

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const sidebar =
                document.getElementById('sidebar');

            const sidebarToggle =
                document.getElementById('sidebarToggle');


            if (sidebarToggle && sidebar) {

                sidebarToggle.addEventListener('click', function () {

                    sidebar.classList.toggle('show');

                });

            }

        });

    </script>


</body>

</html>