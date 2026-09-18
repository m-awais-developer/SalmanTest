```blade
@extends('master.admin')

@section('title', 'Add Service')

@section('content')

<style>
    /* =========================================================
       ADD SERVICE PAGE
    ========================================================= */

    .add-service-page {
        background-color: #f8fafc;
        font-family: 'Segoe UI', Roboto, sans-serif;
        width: 100%;
        min-height: calc(100vh - 70px);
        padding-top: 30px;
        padding-bottom: 80px;
        display: flex;
        flex-direction: column;
    }

    .add-service-page > .container-fluid {
        width: 100%;
        flex: 1;
    }

    .add-service-card {
        border-radius: 16px;
        background: #ffffff;
        margin-bottom: 40px;
        overflow: hidden;
    }

    .add-service-card .card-body {
        padding: 40px;
    }

    /* =========================================================
       FORM TABLE
    ========================================================= */

    .service-form-table {
        border-collapse: separate;
        border-spacing: 0 15px;
        width: 100%;
        margin-bottom: 0;
    }

    .service-form-table th {
        width: 25%;
        vertical-align: middle;
        border: 0;
        background: #f8fafc;
        color: #475569;
        font-weight: 600;
        padding: 15px 10px 15px 20px;
        border-radius: 10px 0 0 10px;
        font-size: 0.95rem;
    }

    .service-form-table td {
        border: 0;
        background: #ffffff;
        padding: 10px 20px 10px 10px;
        vertical-align: middle;
    }

    /* =========================================================
       INPUTS
    ========================================================= */

    .service-input {
        padding: 12px;
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        font-size: 0.95rem;
        width: 100%;
        background-color: #ffffff;
        transition: all 0.2s ease;
    }

    .service-input:focus {
        border-color: #6c5ce7;
        box-shadow: 0 0 0 3px rgba(108, 92, 231, 0.10);
        outline: none;
    }

    .service-textarea {
        padding: 12px;
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        font-size: 0.95rem;
        line-height: 1.7;
        width: 100%;
        resize: vertical;
        min-height: 120px;
        background-color: #ffffff;
        transition: all 0.2s ease;
    }

    .service-textarea:focus {
        border-color: #6c5ce7;
        box-shadow: 0 0 0 3px rgba(108, 92, 231, 0.10);
        outline: none;
    }

    /* Full Detail textarea */
    .service-form-table tr:nth-last-child(2) .service-textarea {
        min-height: 240px;
    }

    /* =========================================================
       HELP TEXT
    ========================================================= */

    .service-form-table small {
        font-size: 0.82rem;
        line-height: 1.5;
    }

    /* =========================================================
       SAVE BUTTON
    ========================================================= */

    .save-service-btn {
        background: linear-gradient(135deg, #6c5ce7, #5b4bc4);
        border-radius: 8px;
        font-size: 0.95rem;
        transition: all 0.2s ease;
        min-width: 170px;
    }

    .save-service-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 15px rgba(108, 92, 231, 0.25);
        color: #ffffff;
    }

    .save-service-btn:focus {
        box-shadow: 0 0 0 3px rgba(108, 92, 231, 0.15);
    }

    /* =========================================================
       BUTTON ROW
    ========================================================= */

    .service-button-row td {
        background: transparent;
        padding-top: 20px;
        padding-bottom: 0;
    }

    /* =========================================================
       MOBILE
    ========================================================= */

    @media (max-width: 991px) {

        .add-service-page {
            padding-top: 25px;
            padding-bottom: 70px;
        }

        .add-service-card .card-body {
            padding: 30px;
        }

        .service-form-table th {
            width: 30%;
        }
    }

    @media (max-width: 767px) {

        .add-service-page {
            min-height: calc(100vh - 60px);
            padding-top: 20px;
            padding-bottom: 60px;
        }

        .add-service-card {
            margin-bottom: 30px;
            border-radius: 12px;
        }

        .add-service-card .card-body {
            padding: 20px 15px;
        }

        .service-form-table {
            border-spacing: 0 10px;
        }

        .service-form-table th {
            width: 35%;
            padding: 12px 8px 12px 12px;
            font-size: 0.88rem;
        }

        .service-form-table td {
            padding: 8px 10px 8px 8px;
        }

        .service-input,
        .service-textarea {
            font-size: 0.9rem;
            padding: 10px;
        }

        .service-form-table tr:nth-last-child(2) .service-textarea {
            min-height: 200px;
        }

        .save-service-btn {
            width: 100%;
            min-width: 0;
        }
    }

    @media (max-width: 480px) {

        .add-service-page {
            padding-top: 15px;
            padding-bottom: 50px;
        }

        .add-service-card .card-body {
            padding: 15px 10px;
        }

        .service-form-table th {
            width: 34%;
            padding-left: 8px;
            font-size: 0.82rem;
        }

        .service-form-table td {
            padding-right: 5px;
        }

        .service-form-table small {
            font-size: 0.75rem;
        }
    }
</style>


<div class="add-service-page">

    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-12 col-lg-9 col-xl-8">

                <div class="card border-0 shadow-sm add-service-card">

                    <div class="card-body">

                        {{-- ================= HEADING ================= --}}

                        <div class="text-center mb-5">

                            <h2 class="fw-bold mb-1"
                                style="
                                    color: #1e293b;
                                    letter-spacing: -0.5px;
                                    font-size: 2rem;
                                ">

                                <i class="fa-solid fa-folder-plus me-2 text-primary"></i>

                                Add Service Details

                            </h2>

                            <p class="text-muted small mb-0">
                                Fill out the fields below to create a professional service.
                            </p>

                        </div>


                        {{-- ================= ALERTS ================= --}}

                        @include('partials.alerts')


                        {{-- ================= FORM ================= --}}

                        <form
                            action="{{ route('admin.services.store') }}"
                            method="POST"
                            enctype="multipart/form-data"
                        >

                            @csrf

                            <table class="table service-form-table align-middle">

                                <tbody>

                                    {{-- ================= TITLE ================= --}}

                                    <tr>

                                        <th>
                                            Title
                                        </th>

                                        <td>

                                            <input
                                                type="text"
                                                name="title"
                                                value="{{ old('title') }}"
                                                class="form-control service-input"
                                                placeholder="Enter service title"
                                                required
                                            >

                                        </td>

                                    </tr>


                                    {{-- ================= TAGLINE ================= --}}

                                    <tr>

                                        <th>
                                            Tagline
                                        </th>

                                        <td>

                                            <input
                                                type="text"
                                                name="tagline"
                                                value="{{ old('tagline') }}"
                                                class="form-control service-input"
                                                placeholder="Enter a short service tagline"
                                            >

                                            <small class="text-muted d-block mt-1">
                                                Example: Professional care with modern medical facilities.
                                            </small>

                                        </td>

                                    </tr>


                                    {{-- ================= IMAGE ================= --}}

                                    <tr>

                                        <th>
                                            Image
                                        </th>

                                        <td>

                                            <input
    type="file"
    name="image"
    class="form-control service-input"
    accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
    required
>
<small class="text-muted d-block mt-1">
    JPG, JPEG, PNG or WEBP. Maximum 10MB.
</small>
                                        </td>

                                    </tr>


                                    {{-- ================= DESCRIPTION ================= --}}

                                    <tr>

                                        <th>
                                            Description
                                        </th>

                                        <td>

                                            <textarea
                                                name="description"
                                                class="form-control service-textarea"
                                                rows="5"
                                                placeholder="Enter short service description..."
                                                required
                                            >{{ old('description') }}</textarea>

                                        </td>

                                    </tr>


                                    {{-- ================= FULL DETAIL ================= --}}

                                    <tr>

                                        <th style="vertical-align: top;">

                                            Full Detail

                                        </th>

                                        <td>

                                            <textarea
                                                name="detail"
                                                class="form-control service-textarea"
                                                rows="10"
                                                placeholder="Enter complete service detail..."
                                            >{{ old('detail') }}</textarea>

                                            <small class="text-muted d-block mt-1">
                                                This detailed content will appear on the Service Detail Page.
                                            </small>

                                        </td>

                                    </tr>


                                    {{-- ================= BUTTON ================= --}}

                                    <tr class="service-button-row">

                                        <td
                                            colspan="2"
                                            class="text-end border-0"
                                        >

                                            <button
                                                type="submit"
                                                class="btn text-white px-5 py-2 fw-bold shadow-sm border-0 save-service-btn"
                                            >

                                                <i class="fa-solid fa-floppy-disk me-2"></i>

                                                Save Service

                                            </button>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
