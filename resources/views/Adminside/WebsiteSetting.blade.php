@extends('master.admin')

@section('title', 'Website Settings')

@section('content')
    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #1f2937;
        }


        .settings-wrapper {
            width: 100%;
            min-height: 100vh;
            padding: 35px 20px;
        }


        .settings-container {
            max-width: 1050px;
            margin: auto;
        }


        /* HEADER */

       .page-header {
    background: linear-gradient(
        135deg,
        #111827,
        #312e81
    );

    border-radius: 22px;
    padding: 30px;
    color: white;
    margin-bottom: 25px;

    box-shadow:
        0 15px 40px rgba(0,0,0,0.12);

    /* ONLY HEADER KO NEECHE KARNA HAI */
    transform: translateY(25px);

    /* form/card ki original space maintain rahe */
    margin-top: -25px;
}

        .header-content {
            display: flex;

            align-items: center;

            gap: 20px;
        }


        .header-icon {
            width: 65px;
            height: 65px;

            border-radius: 18px;

            background: rgba(255,255,255,0.15);

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 30px;

            backdrop-filter: blur(10px);
        }


        .page-header h1 {
            font-size: 27px;

            margin-bottom: 7px;
        }


        .page-header p {
            color: #dbeafe;

            font-size: 14px;
        }


        /* CARD */

        .settings-card {
            background: white;

            border-radius: 22px;

            padding: 32px;

            box-shadow:
                0 10px 35px rgba(15,23,42,0.08);
        }


        .section-title {
            margin-bottom: 25px;
        }


        .section-title h2 {
            font-size: 20px;

            color: #111827;

            margin-bottom: 6px;
        }


        .section-title p {
            font-size: 13px;

            color: #6b7280;
        }


        /* GRID */

        .form-grid {
            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 22px;
        }


        .form-group {
            display: flex;

            flex-direction: column;
        }


        .form-group.full {
            grid-column: 1 / -1;
        }


        label {
            font-size: 14px;

            font-weight: 600;

            margin-bottom: 8px;

            color: #374151;
        }


        .input-wrapper {
            position: relative;
        }


        .input-icon {
            position: absolute;

            left: 15px;

            top: 50%;

            transform: translateY(-50%);

            font-size: 18px;

            opacity: .65;
        }


        input[type="text"],
        input[type="email"],
        input[type="file"] {

            width: 100%;

            padding: 14px 15px 14px 45px;

            border: 1px solid #e5e7eb;

            border-radius: 13px;

            background: #f9fafb;

            font-size: 14px;

            outline: none;

            transition: .25s;
        }


        input:focus {

            background: white;

            border-color: #6366f1;

            box-shadow:
                0 0 0 4px rgba(99,102,241,.10);
        }


        /* LOGO */

        .logo-upload {

            border: 2px dashed #dbeafe;

            border-radius: 17px;

            padding: 20px;

            background: #f8fafc;
        }


        .current-logo {

            display: flex;

            align-items: center;

            gap: 18px;

            margin-bottom: 15px;
        }


        .current-logo img {

            width: 90px;
            height: 90px;

            object-fit: contain;

            background: white;

            border-radius: 15px;

            padding: 8px;

            border: 1px solid #e5e7eb;

            box-shadow:
                0 5px 15px rgba(0,0,0,.06);
        }


        .current-logo span {

            font-size: 13px;

            color: #6b7280;
        }


        /* BUTTON */

        .form-actions {

            margin-top: 30px;

            display: flex;

            justify-content: flex-end;
        }


        .save-btn {

            border: none;

            border-radius: 13px;

            padding: 14px 28px;

            background:
                linear-gradient(
                    135deg,
                    #4f46e5,
                    #7c3aed
                );

            color: white;

            font-size: 14px;

            font-weight: 600;

            cursor: pointer;

            box-shadow:
                0 8px 20px rgba(79,70,229,.25);

            transition: .25s;
        }


        .save-btn:hover {

            transform: translateY(-2px);

            box-shadow:
                0 12px 25px rgba(79,70,229,.35);
        }


        /* SUCCESS */

        .success-message {

            background: #ecfdf5;

            color: #047857;

            border: 1px solid #a7f3d0;

            padding: 14px 18px;

            border-radius: 12px;

            margin-bottom: 20px;

            font-size: 14px;
        }


        /* ERRORS */

        .error-message {

            background: #fef2f2;

            color: #b91c1c;

            border: 1px solid #fecaca;

            padding: 12px 15px;

            border-radius: 10px;

            margin-top: 6px;

            font-size: 12px;
        }


        /* RESPONSIVE */

        @media(max-width: 768px) {

            .settings-wrapper {
                padding: 20px 12px;
            }


            .page-header {
                padding: 22px;
            }


            .header-content {
                align-items: flex-start;
            }


            .page-header h1 {
                font-size: 22px;
            }


            .settings-card {
                padding: 22px;
            }


            .form-grid {
                grid-template-columns: 1fr;
            }


            .form-group.full {
                grid-column: auto;
            }


            .form-actions {
                justify-content: stretch;
            }


            .save-btn {
                width: 100%;
            }
        }

    </style>

</head>


<body>


<div class="settings-wrapper">

    <div class="settings-container">


        <!-- HEADER -->

        <div class="page-header">

            <div class="header-content">

                <div class="header-icon">
                    ⚙️
                </div>

                <div>

                    <h1>
                        Website Settings
                    </h1>

                    <p>
                        Manage your website information and keep
                        everything updated from one place.
                    </p>

                </div>

            </div>

        </div>



        <!-- CARD -->

        <div class="settings-card">

  @include('partials.alerts')




            <div class="section-title">

                <h2>
                    Website Information
                </h2>

                <p>
                    Update your website logo and contact information.
                    These details can be displayed across your website.
                </p>

            </div>



            <form
                action="{{ route('admin.website.settings.save') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf


                <div class="form-grid">


                    <!-- LOGO -->

                    <div class="form-group full">

                        <label>
                            Website Logo
                        </label>


                        <div class="logo-upload">


                            @if(!empty($setting?->logo))

                                <div class="current-logo">

                                    <img
                                        src="{{ asset('storage/settings/' . basename($setting->logo)) }}"
                                        alt="Website Logo"
                                    >

                                    <span>
                                        Current website logo
                                    </span>

                                </div>

                            @endif


                            <div class="input-wrapper">

                                <span class="input-icon">
                                    🖼️
                                </span>

                                <input
                                    type="file"
                                    name="logo"
                                    accept="image/png,image/jpeg,image/webp"
                                >

                            </div>


                            @error('logo')

                                <div class="error-message">
                                    {{ $message }}
                                </div>

                            @enderror


                        </div>

                    </div>



                    <!-- EMAIL -->

                    <div class="form-group">

                        <label>
                            Email Address
                        </label>

                        <div class="input-wrapper">

                            <span class="input-icon">
                                ✉️
                            </span>

                            <input
                                type="email"
                                name="email"
                                placeholder="example@email.com"
                                value="{{ old('email', $setting->email ?? '') }}"
                            >

                        </div>


                        @error('email')

                            <div class="error-message">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- PHONE -->

                    <div class="form-group">

                        <label>
                            Phone Number
                        </label>

                        <div class="input-wrapper">

                            <span class="input-icon">
                                📞
                            </span>

                            <input
                                type="text"
                                name="phone"
                                placeholder="+92 300 1234567"
                                value="{{ old('phone', $setting->phone ?? '') }}"
                            >

                        </div>


                        @error('phone')

                            <div class="error-message">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>



                    <!-- STREET -->

                    <div class="form-group full">

                        <label>
                            Street Address
                        </label>

                        <div class="input-wrapper">

                            <span class="input-icon">
                                📍
                            </span>

                            <input
                                type="text"
                                name="street"
                                placeholder="Enter your complete street address"
                                value="{{ old('street', $setting->street ?? '') }}"
                            >

                        </div>


                        @error('street')

                            <div class="error-message">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                </div>



                <!-- BUTTON -->

                <div class="form-actions">

                    <button
                        type="submit"
                        class="save-btn"
                    >
                        💾 Save / Update Settings
                    </button>

                </div>


            </form>


        </div>

    </div>

</div>

@endsection