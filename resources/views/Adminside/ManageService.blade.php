```blade
@extends('master.admin')

@section('title', 'Manage Services')

@section('content')

<style>

/* =========================================================
   MANAGE SERVICES PAGE
========================================================= */

.manage-services-page {
    width: 100%;
    min-height: 100vh;
    background: #f6f8fc;
    padding: 28px 30px 45px;
}

.manage-services-inner {
    width: 100%;
    max-width: 1400px;
    margin: 0 auto;
}

/* =========================================================
   TOP HEADER
========================================================= */

.manage-page-header {
    background: #ffffff;
    border: 1px solid #e9edf3;
    border-radius: 15px;
    padding: 24px;
    margin: 35px auto 28px;
    max-width: 1000px;
    box-shadow: 0 3px 12px rgba(15, 23, 42, 0.045);
    text-align: center;
}

.manage-header-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.manage-header-icon {
    width: 50px;
    height: 50px;
    min-width: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 13px;
    background: linear-gradient(135deg, #ede9fe, #ddd6fe);
    color: #6c5ce7;
    font-size: 21px;
}

.manage-page-header h1 {
    margin: 0;
    color: #172033;
    font-size: 28px;
    font-weight: 750;
    letter-spacing: -0.5px;
}

.manage-page-header p {
    margin: 5px 0 0;
    color: #64748b;
    font-size: 13px;
}

/* =========================================================
   ALERT
========================================================= */

.manage-alert {
    border: 0;
    border-radius: 10px;
    padding: 12px 16px;
    margin-bottom: 18px;
    font-size: 13px;
}

/* =========================================================
   SERVICE GRID
========================================================= */

.manage-service-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
}

/* =========================================================
   SERVICE CARD
========================================================= */

.manage-service-card {
    width: 100%;
    min-height: 190px;
    background: #ffffff;
    border: 1px solid #e9edf3;
    border-radius: 14px;
    overflow: hidden;
    display: flex;
    box-shadow: 0 3px 12px rgba(15, 23, 42, 0.04);
    transition:
        transform 0.2s ease,
        box-shadow 0.2s ease;
}

.manage-service-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 22px rgba(15, 23, 42, 0.08);
}

/* =========================================================
   SERVICE IMAGE
========================================================= */

.manage-service-image {
    width: 145px;
    min-width: 145px;
    height: 190px;
    background: #eef2f7;
    overflow: hidden;
}

.manage-service-image img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    object-position: center;
}

.manage-no-image {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #94a3b8;
    font-size: 30px;
}

/* =========================================================
   SERVICE CONTENT
========================================================= */

.manage-service-content {
    flex: 1;
    min-width: 0;
    padding: 14px 17px;
    display: flex;
    flex-direction: column;
}

.manage-service-title {
    color: #172033;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 4px;

    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* =========================================================
   TAGLINE
========================================================= */

.manage-service-tagline {
    color: #6c5ce7;
    font-size: 11px;
    font-weight: 600;
    line-height: 1.4;
    margin-bottom: 6px;

    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* =========================================================
   DESCRIPTION
========================================================= */

.manage-service-description {
    color: #64748b;
    font-size: 11px;
    line-height: 1.5;
    margin-bottom: 5px;

    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* =========================================================
   FULL DETAIL PREVIEW
========================================================= */

.manage-service-detail {
    color: #94a3b8;
    font-size: 10px;
    line-height: 1.4;
    margin-bottom: 8px;

    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* =========================================================
   ACTION BUTTONS
========================================================= */

.manage-service-actions {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-top: auto;
}

.manage-service-actions form {
    margin: 0;
}

.manage-service-actions .btn {
    font-size: 10px;
    padding: 5px 9px;
    line-height: 1.3;
    border-radius: 7px;
    white-space: nowrap;
}

/* =========================================================
   EMPTY STATE
========================================================= */

.manage-empty {
    grid-column: 1 / -1;
    background: #ffffff;
    border: 1px solid #e9edf3;
    border-radius: 14px;
    padding: 60px 20px;
    text-align: center;
    box-shadow: 0 3px 12px rgba(15, 23, 42, 0.035);
}

/* =========================================================
   EDIT MODAL
========================================================= */

.manage-modal-image {
    width: 170px;
    height: 100px;
    object-fit: cover;
    object-position: center;
    border-radius: 10px;
    border: 1px solid #e5e7eb;
}

.manage-modal .form-control {
    border-color: #d9dee7;
    border-radius: 8px;
    padding: 10px 12px;
}

.manage-modal .form-control:focus {
    border-color: #8b7cf0;
    box-shadow: 0 0 0 3px rgba(108, 92, 231, 0.10);
}

.manage-modal textarea {
    resize: vertical;
    min-height: 120px;
}

/* Full Detail */

.manage-modal textarea[name="detail"] {
    min-height: 260px;
}

/* =========================================================
   LARGE DESKTOP
========================================================= */

@media (min-width: 1600px) {

    .manage-services-page {
        padding-left: 40px;
        padding-right: 40px;
    }

    .manage-services-inner {
        max-width: 1450px;
    }

    .manage-service-grid {
        gap: 20px;
    }
}

/* =========================================================
   LAPTOP
========================================================= */

@media (max-width: 1200px) {

    .manage-services-page {
        padding: 22px;
    }

    .manage-service-card {
        min-height: 185px;
    }

    .manage-service-image {
        width: 130px;
        min-width: 130px;
        height: 185px;
    }

    .manage-service-content {
        padding: 13px 14px;
    }
}

/* =========================================================
   TABLET
========================================================= */

@media (max-width: 900px) {

    .manage-services-page {
        padding: 18px;
    }

    .manage-page-header {
        padding: 17px 18px;
    }

    .manage-page-header h1 {
        font-size: 23px;
    }

    .manage-service-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 13px;
    }

    .manage-service-card {
        min-height: 180px;
    }

    .manage-service-image {
        width: 110px;
        min-width: 110px;
        height: 180px;
    }

    .manage-service-content {
        padding: 11px 12px;
    }

    .manage-service-title {
        font-size: 14px;
    }

    .manage-service-tagline {
        font-size: 10px;
    }

    .manage-service-description {
        font-size: 10px;
    }

    .manage-service-detail {
        font-size: 9px;
    }

    .manage-service-actions {
        gap: 4px;
    }

    .manage-service-actions .btn {
        font-size: 9px;
        padding: 4px 6px;
    }

    .manage-modal textarea[name="detail"] {
        min-height: 220px;
    }
}

/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 650px) {

    .manage-services-page {
        padding: 14px;
    }

    .manage-page-header {
        padding: 15px;
        margin-bottom: 15px;
    }

    .manage-header-icon {
        width: 42px;
        height: 42px;
        min-width: 42px;
        font-size: 17px;
    }

    .manage-page-header h1 {
        font-size: 20px;
    }

    .manage-page-header p {
        font-size: 11px;
    }

    .manage-service-grid {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    .manage-service-card {
        min-height: 175px;
    }

    .manage-service-image {
        width: 115px;
        min-width: 115px;
        height: 175px;
    }

    .manage-service-content {
        padding: 11px 12px;
    }

    .manage-service-title {
        font-size: 14px;
    }

    .manage-service-tagline {
        font-size: 10px;
    }

    .manage-service-description {
        font-size: 10px;
    }

    .manage-service-detail {
        font-size: 9px;
    }

    .manage-modal .modal-body {
        padding-left: 16px !important;
        padding-right: 16px !important;
    }

    .manage-modal textarea[name="detail"] {
        min-height: 200px;
    }
}

/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    .manage-services-page {
        padding: 10px;
    }

    .manage-page-header {
        padding: 13px;
    }

    .manage-header-icon {
        width: 38px;
        height: 38px;
        min-width: 38px;
    }

    .manage-page-header h1 {
        font-size: 18px;
    }

    .manage-service-card {
        min-height: 165px;
    }

    .manage-service-image {
        width: 90px;
        min-width: 90px;
        height: 165px;
    }

    .manage-service-content {
        padding: 9px;
    }

    .manage-service-title {
        font-size: 13px;
    }

    .manage-service-tagline {
        font-size: 9px;
    }

    .manage-service-description {
        font-size: 9px;
    }

    .manage-service-detail {
        font-size: 8px;
    }

    .manage-service-actions {
        gap: 3px;
    }

    .manage-service-actions .btn {
        font-size: 8px;
        padding: 4px 5px;
    }

    .manage-modal textarea[name="detail"] {
        min-height: 180px;
    }
}

</style>


<div class="manage-services-page">

    <div class="manage-services-inner">


        {{-- =====================================================
             PAGE HEADER
        ====================================================== --}}

        <div class="manage-page-header">

            <div class="manage-header-content">

                <div class="manage-header-icon">
                    <i class="bi bi-heart-pulse"></i>
                </div>

                <div>

                    <h1>
                        Manage Services
                    </h1>

                    <p>
                        View, edit and manage all your medical services.
                    </p>

                </div>

            </div>

        </div>


        {{-- =====================================================
             ALERTS
        ====================================================== --}}

        @include('partials.alerts')


        {{-- =====================================================
             SERVICE GRID
        ====================================================== --}}

        <div class="manage-service-grid">

            @forelse($service as $service)


                {{-- =================================================
                     SERVICE CARD
                ================================================== --}}

                <div class="manage-service-card">


                    {{-- SERVICE IMAGE --}}

                    <div class="manage-service-image">

                        @if($service->image)

                            <img
                                src="{{ asset('storage/services/' . $service->image) }}"
                                alt="{{ $service->title }}">

                        @else

                            <div class="manage-no-image">

                                <i class="fa-regular fa-image"></i>

                            </div>

                        @endif

                    </div>


                    {{-- SERVICE CONTENT --}}

                    <div class="manage-service-content">


                        {{-- TITLE --}}

                        <div class="manage-service-title">

                            {{ $service->title }}

                        </div>


                        {{-- TAGLINE --}}

                        @if($service->tagline)

                            <div class="manage-service-tagline">

                                {{ $service->tagline }}

                            </div>

                        @endif


                        {{-- DESCRIPTION --}}

                        @if($service->description)

                            <div class="manage-service-description">

                                {{ \Illuminate\Support\Str::limit($service->description, 100) }}

                            </div>

                        @endif


                        {{-- FULL DETAIL --}}

                        @if($service->detail)

                            <div class="manage-service-detail">

                                {{ \Illuminate\Support\Str::limit($service->detail, 110) }}

                            </div>

                        @endif


                        {{-- ACTIONS --}}

                        <div class="manage-service-actions">


                            {{-- EDIT --}}

                            <button
                                type="button"
                                class="btn btn-outline-primary"
                                data-bs-toggle="modal"
                                data-bs-target="#editService{{ $service->id }}">

                                <i class="fa-solid fa-pen-to-square"></i>

                                Edit

                            </button>


                            {{-- DELETE --}}

                            <form
                                action="{{ route('admin.service.delete', $service->id) }}"
                                method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this service?');">

                                @csrf

                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-outline-danger">

                                    <i class="fa-solid fa-trash"></i>

                                    Delete

                                </button>

                            </form>


                        </div>

                    </div>

                </div>


                {{-- =================================================
                     EDIT MODAL
                ================================================== --}}

                <div
                    class="modal fade"
                    id="editService{{ $service->id }}"
                    tabindex="-1"
                    aria-hidden="true">

                    <div class="modal-dialog modal-lg modal-dialog-centered">

                        <div class="modal-content border-0 shadow-lg manage-modal">


                            {{-- MODAL HEADER --}}

                            <div class="modal-header border-0 px-4 pt-4">

                                <div>

                                    <h5 class="fw-bold mb-1">
                                        Edit Service
                                    </h5>

                                    <p class="text-muted small mb-0">
                                        Update your service information.
                                    </p>

                                </div>


                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal">
                                </button>

                            </div>


                            {{-- MODAL BODY --}}

                            <div class="modal-body px-4 pb-4">

                                <form
                                    action="{{ route('admin.service.update', $service->id) }}"
                                    method="POST"
                                    enctype="multipart/form-data">

                                    @csrf

                                    @method('PUT')


                                    {{-- CURRENT IMAGE --}}

                                    @if($service->image)

                                        <div class="text-center mb-4">

                                            <img
                                                src="{{ asset('storage/services/' . $service->image) }}"
                                                alt="{{ $service->title }}"
                                                class="manage-modal-image">

                                            <div class="small text-muted mt-2">
                                                Current Image
                                            </div>

                                        </div>

                                    @endif


                                    {{-- TITLE --}}

                                    <div class="mb-3">

                                        <label class="form-label fw-semibold">
                                            Service Title
                                        </label>

                                        <input
                                            type="text"
                                            name="title"
                                            value="{{ $service->title }}"
                                            class="form-control"
                                            required>

                                    </div>


                                    {{-- TAGLINE --}}

                                    <div class="mb-3">

                                        <label class="form-label fw-semibold">
                                            Tagline
                                        </label>

                                        <input
                                            type="text"
                                            name="tagline"
                                            value="{{ $service->tagline }}"
                                            class="form-control"
                                            placeholder="Example: Professional care with modern medical facilities.">

                                        <small class="text-muted">
                                            Enter a short sentence displayed below the service title.
                                        </small>

                                    </div>


                                    {{-- DESCRIPTION --}}

                                    <div class="mb-3">

                                        <label class="form-label fw-semibold">
                                            Description
                                        </label>

                                        <textarea
                                            name="description"
                                            rows="5"
                                            class="form-control"
                                            maxlength="350"
                                            required>{{ $service->description }}</textarea>

                                        <small class="text-muted">
                                            Maximum 350 characters.
                                        </small>

                                    </div>


                                    {{-- FULL DETAIL --}}

                                    <div class="mb-4">

                                        <label class="form-label fw-semibold">
                                            Full Detail
                                        </label>

                                        <textarea
                                            name="detail"
                                            rows="12"
                                            class="form-control"
                                            placeholder="Enter complete service information...">{{ $service->detail }}</textarea>

                                        <small class="text-muted">
                                            Enter as much detail as you need.
                                        </small>

                                    </div>


                                    {{-- IMAGE --}}

                                    <div class="mb-4">

                                        <label class="form-label fw-semibold">
                                            Change Image
                                        </label>

                                        <input
                                            type="file"
                                            name="image"
                                            class="form-control"
                                            accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp">

                                        <small class="text-muted">
                                            Leave empty to keep the current image.
                                        </small>

                                    </div>


                                    {{-- MODAL BUTTONS --}}

                                    <div class="d-flex justify-content-end gap-2">

                                        <button
                                            type="button"
                                            class="btn btn-light px-4"
                                            data-bs-dismiss="modal">

                                            Cancel

                                        </button>


                                        <button
                                            type="submit"
                                            class="btn text-white px-4"
                                            style="
                                                background:linear-gradient(
                                                    135deg,
                                                    #6c5ce7,
                                                    #5b4bc4
                                                );
                                                border-radius:8px;
                                            ">

                                            <i class="fa-solid fa-floppy-disk me-1"></i>

                                            Update Service

                                        </button>

                                    </div>


                                </form>

                            </div>

                        </div>

                    </div>

                </div>


            @empty


                {{-- =================================================
                     EMPTY STATE
                ================================================== --}}

                <div class="manage-empty">

                    <i
                        class="fa-solid fa-heart-pulse text-primary mb-3"
                        style="font-size:45px;">
                    </i>

                    <h5 class="fw-bold">
                        No Services Found
                    </h5>

                    <p class="text-muted small mb-0">
                        You haven't added any medical services yet.
                    </p>

                </div>


            @endforelse

        </div>


    </div>

</div>

@endsection

