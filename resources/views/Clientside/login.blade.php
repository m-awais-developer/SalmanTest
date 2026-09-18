<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Admin Dashboard</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet"
    >

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f4f7fb;
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
        }

        .login-card {
            width: 100%;
            max-width: 1050px;
            min-height: 620px;
            background: #ffffff;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(15, 23, 42, 0.12);
            display: flex;
        }

        /* LEFT SIDE */

        .login-left {
            width: 50%;
            padding: 65px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: linear-gradient(
                145deg,
                #0d6efd,
                #084298
            );
            color: #ffffff;
            position: relative;
            overflow: hidden;
        }

        .login-left::before {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            top: -100px;
            right: -100px;
        }

        .login-left::after {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: rgba(255,255,255,0.06);
            bottom: -100px;
            left: -80px;
        }

        .brand-icon {
            width: 75px;
            height: 75px;
            border-radius: 20px;
            background: rgba(255,255,255,0.16);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
            margin-bottom: 30px;
            position: relative;
            z-index: 2;
        }

        .login-left h1 {
            font-size: 42px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 18px;
            position: relative;
            z-index: 2;
        }

        .login-left p {
            font-size: 17px;
            line-height: 1.8;
            color: rgba(255,255,255,0.85);
            max-width: 430px;
            position: relative;
            z-index: 2;
        }

        .feature-list {
            margin-top: 30px;
            position: relative;
            z-index: 2;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 15px;
            font-size: 15px;
        }

        .feature-item i {
            font-size: 18px;
        }

        /* RIGHT SIDE */

        .login-right {
            width: 50%;
            padding: 65px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-form {
            width: 100%;
            max-width: 410px;
        }

        .login-title {
            margin-bottom: 8px;
            font-size: 32px;
            font-weight: 700;
            color: #172033;
        }

        .login-subtitle {
            color: #718096;
            margin-bottom: 35px;
        }

        .form-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 9px;
        }

        .input-group {
            margin-bottom: 22px;
        }

        .input-group-text {
            background: #f8fafc;
            border: 1px solid #dfe5ec;
            border-right: 0;
            color: #64748b;
            padding-left: 16px;
        }

        .form-control {
            height: 54px;
            border: 1px solid #dfe5ec;
            border-left: 0;
            background: #f8fafc;
            font-size: 15px;
            box-shadow: none !important;
        }

        .form-control:focus {
            background: #ffffff;
            border-color: #86b7fe;
        }

        .input-group:focus-within .input-group-text {
            border-color: #86b7fe;
            background: #ffffff;
        }

        .password-toggle {
            cursor: pointer;
            border-left: 0;
            border-right: 1px solid #dfe5ec;
        }

        .login-btn {
            width: 100%;
            height: 55px;
            border: none;
            border-radius: 12px;
            background: #0d6efd;
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            transition: 0.25s ease;
            box-shadow: 0 8px 20px rgba(13, 110, 253, 0.22);
        }

        .login-btn:hover {
            background: #0b5ed7;
            transform: translateY(-1px);
            box-shadow: 0 12px 25px rgba(13, 110, 253, 0.28);
        }

        .alert {
            border-radius: 12px;
            font-size: 14px;
        }

        .login-footer {
            text-align: center;
            margin-top: 28px;
            color: #94a3b8;
            font-size: 13px;
        }

        /* TABLET */

        @media (max-width: 900px) {

            .login-card {
                max-width: 600px;
            }

            .login-left {
                display: none;
            }

            .login-right {
                width: 100%;
                padding: 55px;
            }

        }

        /* MOBILE */

        @media (max-width: 576px) {

            .login-wrapper {
                padding: 15px;
            }

            .login-card {
                min-height: auto;
                border-radius: 20px;
            }

            .login-right {
                padding: 38px 25px;
            }

            .login-title {
                font-size: 28px;
            }

            .login-subtitle {
                margin-bottom: 28px;
            }

        }

    </style>

</head>


<body>

<div class="login-wrapper">

    <div class="login-card">


        {{-- LEFT PANEL --}}

        <div class="login-left">

            <div class="brand-icon">
                <i class="bi bi-shield-lock-fill"></i>
            </div>

            <h1>
                Welcome Back!
            </h1>

            <p>
                Sign in to access your admin dashboard and manage
                your website securely from one place.
            </p>

            <div class="feature-list">

                <div class="feature-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Secure Admin Access</span>
                </div>

                <div class="feature-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Manage Your Website</span>
                </div>

                <div class="feature-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <span>Simple & Responsive Dashboard</span>
                </div>

            </div>

        </div>


        {{-- RIGHT PANEL --}}

        <div class="login-right">

            <div class="login-form">

                <h2 class="login-title">
                    Admin Login
                </h2>

                <p class="login-subtitle">
                    Enter your credentials to continue.
                </p>


                {{-- ERROR MESSAGE --}}

                @if ($errors->any())

                    <div class="alert alert-danger border-0 shadow-sm mb-4">

                        <i class="bi bi-exclamation-circle me-2"></i>

                        {{ $errors->first() }}

                    </div>

                @endif


                {{-- LOGIN FORM --}}
                
                
                <form
                    action="{{ route('login.submit') }}"
                    method="POST"
                >

                    @csrf


                    {{-- EMAIL --}}

                    <label class="form-label">
                        Email Address
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-envelope"></i>
                        </span>

                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="Enter your email"
                            value="{{ old('email') }}"
                            autocomplete="email"
                            required
                        >

                    </div>


                    {{-- PASSWORD --}}

                    <label class="form-label">
                        Password
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-lock"></i>
                        </span>

                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control"
                            placeholder="Enter your password"
                            autocomplete="current-password"
                            required
                        >

                        <span
                            class="input-group-text password-toggle"
                            onclick="togglePassword()"
                        >
                            <i
                                class="bi bi-eye"
                                id="passwordIcon"
                            ></i>
                        </span>

                    </div>


                    {{-- LOGIN BUTTON --}}

                    <button
                        type="submit"
                        class="login-btn"
                    >

                        <i class="bi bi-box-arrow-in-right me-2"></i>

                        Sign In

                    </button>

                </form>


                <div class="login-footer">

                    <i class="bi bi-shield-check me-1"></i>

                    Secure Admin Authentication

                </div>

            </div>

        </div>

    </div>

</div>


<script>

function togglePassword()
{
    const password = document.getElementById('password');
    const icon = document.getElementById('passwordIcon');

    if (password.type === 'password') {

        password.type = 'text';

        icon.classList.remove('bi-eye');

        icon.classList.add('bi-eye-slash');

    } else {

        password.type = 'password';

        icon.classList.remove('bi-eye-slash');

        icon.classList.add('bi-eye');

    }
}

</script>

</body>

</html>