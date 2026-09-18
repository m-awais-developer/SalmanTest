@extends('master.admin')

@section('title', 'Manage Blogs')

@section('content')

<style> /* ========================================================= MANAGE BLOGS PAGE ========================================================= */
.manage-blogs-page {
    width: 100%;
    min-height: 100vh;
    background: #f6f8fc;

    /*
     * Safe spacing from sidebar and screen edges.
     * This works even on large screens.
     */
    padding: 28px 30px 45px;
}

.manage-blogs-inner {
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

    padding: 24px 24px;
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

    background: linear-gradient(
        135deg,
        #ede9fe,
        #ddd6fe
    );

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
   SUCCESS / ERROR
========================================================= */

.manage-alert {
    border: 0;
    border-radius: 10px;

    padding: 12px 16px;

    margin-bottom: 18px;

    font-size: 13px;
}

/* =========================================================
   BLOG GRID
========================================================= */

.manage-blog-grid {
    display: grid;

    /*
     * 2 cards per row
     */
    grid-template-columns: repeat(2, minmax(0, 1fr));

    gap: 18px;
}

/* =========================================================
   BLOG CARD
========================================================= */

.manage-blog-card {
    width: 100%;

    height: 170px;

    background: #ffffff;

    border: 1px solid #e9edf3;

    border-radius: 14px;

    overflow: hidden;

    display: flex;

    box-shadow:
        0 3px 12px rgba(15, 23, 42, 0.04);

    transition:
        transform 0.2s ease,
        box-shadow 0.2s ease;
}

.manage-blog-card:hover {
    transform: translateY(-2px);

    box-shadow:
        0 8px 22px rgba(15, 23, 42, 0.08);
}

/* =========================================================
   BLOG IMAGE
========================================================= */

.manage-blog-image {
    width: 145px;
    min-width: 145px;

    height: 170px;

    background: #eef2f7;

    overflow: hidden;
}

.manage-blog-image img {
    width: 100%;
    height: 100%;

    display: block;

    /*
     * Image remains clear and keeps original ratio.
     */
    object-fit: cover;
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
   BLOG CONTENT
========================================================= */

.manage-blog-content {
    flex: 1;
    min-width: 0;

    padding: 14px 17px;

    display: flex;
    flex-direction: column;
}

.manage-blog-date {
    color: #6c5ce7;

    font-size: 10px;

    font-weight: 700;

    margin-bottom: 5px;
}

.manage-blog-title {
    color: #172033;

    font-size: 16px;

    font-weight: 700;

    line-height: 1.3;

    margin-bottom: 6px;

    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;

    overflow: hidden;
}

.manage-blog-description {
    color: #64748b;

    font-size: 11px;

    line-height: 1.5;

    margin-bottom: 8px;

    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;

    overflow: hidden;
}

/* =========================================================
   ACTION BUTTONS
========================================================= */

.manage-blog-actions {
    display: flex;

    align-items: center;

    gap: 6px;

    margin-top: auto;
}

.manage-blog-actions form {
    margin: 0;
}

.manage-blog-actions .btn {
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

/* =========================================================
   LARGE DESKTOP
========================================================= */

@media (min-width: 1600px) {

    .manage-blogs-page {
        padding-left: 40px;
        padding-right: 40px;
    }

    .manage-blogs-inner {
        max-width: 1450px;
    }

    .manage-blog-grid {
        gap: 20px;
    }
}

/* =========================================================
   LAPTOP
========================================================= */

@media (max-width: 1200px) {

    .manage-blogs-page {
        padding: 22px;
    }

    .manage-blog-card {
        height: 165px;
    }

    .manage-blog-image {
        width: 130px;
        min-width: 130px;
        height: 165px;
    }

    .manage-blog-content {
        padding: 13px 14px;
    }
}

/* =========================================================
   TABLET
========================================================= */

@media (max-width: 900px) {

    .manage-blogs-page {
        padding: 18px;
    }

    .manage-page-header {
        padding: 17px 18px;
    }

    .manage-page-header h1 {
        font-size: 23px;
    }

    .manage-blog-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));

        gap: 13px;
    }

    .manage-blog-card {
        height: 155px;
    }

    .manage-blog-image {
        width: 110px;
        min-width: 110px;
        height: 155px;
    }

    .manage-blog-content {
        padding: 11px 12px;
    }

    .manage-blog-title {
        font-size: 14px;
    }

    .manage-blog-description {
        font-size: 10px;
    }

    .manage-blog-actions {
        gap: 4px;
    }

    .manage-blog-actions .btn {
        font-size: 9px;
        padding: 4px 6px;
    }
}

/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 650px) {

    .manage-blogs-page {
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

    /*
     * One card on mobile.
     */
    .manage-blog-grid {
        grid-template-columns: 1fr;

        gap: 12px;
    }

    .manage-blog-card {
        height: 150px;
    }

    .manage-blog-image {
        width: 115px;
        min-width: 115px;

        height: 150px;
    }

    .manage-blog-content {
        padding: 11px 12px;
    }

    .manage-blog-title {
        font-size: 14px;
    }

    .manage-blog-description {
        font-size: 10px;
    }
}

/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 420px) {

    .manage-blogs-page {
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

    .manage-blog-card {
        height: 140px;
    }

    .manage-blog-image {
        width: 90px;
        min-width: 90px;

        height: 140px;
    }

    .manage-blog-content {
        padding: 9px;
    }

    .manage-blog-title {
        font-size: 13px;
    }

    .manage-blog-description {
        font-size: 9px;
    }

    .manage-blog-actions {
        gap: 3px;
    }

    .manage-blog-actions .btn {
        font-size: 8px;
        padding: 4px 5px;
    }
}

</style> <div class="manage-blogs-page">
<div class="manage-blogs-inner">

    {{-- =====================================================
         PAGE HEADER
    ====================================================== --}}

    <div class="manage-page-header">

        <div class="manage-header-content">

            <div class="manage-header-icon">

             <i class="bi bi-file-earmark-text"></i>

            </div>

            <div>
            
            
                <h1>
                    Manage Blogs
                </h1>

                <p>
                    View, edit and manage all your blog posts.
                </p>

            </div>

        </div>

    </div>

    {{-- =====================================================
         SUCCESS MESSAGE
    ====================================================== --}}

      @include('partials.alerts')

    {{-- =====================================================
         BLOG GRID
    ====================================================== --}}

    <div class="manage-blog-grid">

        @forelse($blogs as $blog)

            {{-- =================================================
                 BLOG CARD
            ================================================== --}}

            <div class="manage-blog-card">

                {{-- BLOG IMAGE --}}

                <div class="manage-blog-image">

                    @if($blog->image)

                        <img
                            src="{{ asset('uploads/blogs/' . $blog->image) }}"
                            alt="{{ $blog->title }}">

                    @else

                        <div class="manage-no-image">

                            <i class="fa-regular fa-image"></i>

                        </div>

                    @endif

                </div>

                {{-- BLOG CONTENT --}}

                <div class="manage-blog-content">

                    {{-- DATE --}}

                    <div class="manage-blog-date">

                        <i class="fa-regular fa-calendar me-1"></i>

                        {{ $blog->created_at->format('d M Y') }}

                    </div>

                    {{-- TITLE --}}

                    <div class="manage-blog-title">

                        {{ $blog->title }}

                    </div>

                    {{-- DESCRIPTION --}}

                    <div class="manage-blog-description">

                        {{ \Illuminate\Support\Str::limit($blog->description, 90) }}

                    </div>

                    {{-- ACTIONS --}}

                    <div class="manage-blog-actions">

                        {{-- VIEW --}}

                        <a
                            href="{{ url('/blog') }}"
                            target="_blank"
                            class="btn btn-outline-secondary">

                            <i class="fa-solid fa-eye"></i>

                            View

                        </a>

                        {{-- EDIT --}}

                        <button
                            type="button"
                            class="btn btn-outline-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#editBlog{{ $blog->id }}">

                            <i class="fa-solid fa-pen-to-square"></i>

                            Edit

                        </button>

                        {{-- DELETE --}}

                        <form
                            action="{{ route('admin.blogs.delete', $blog->id) }}"
                            method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this blog?');">

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
                id="editBlog{{ $blog->id }}"
                tabindex="-1"
                aria-hidden="true">

                <div class="modal-dialog modal-lg modal-dialog-centered">

                    <div class="modal-content border-0 shadow-lg manage-modal">

                        {{-- MODAL HEADER --}}

                        <div class="modal-header border-0 px-4 pt-4">

                            <div>

                                <h5 class="fw-bold mb-1">

                                    Edit Blog

                                </h5>

                                <p class="text-muted small mb-0">

                                    Update your blog information.

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
                                action="{{ route('admin.blogs.update', $blog->id) }}"
                                method="POST"
                                enctype="multipart/form-data">

                                @csrf

                                @method('PUT')

                                {{-- CURRENT IMAGE --}}

                                @if($blog->image)

                                    <div class="text-center mb-4">

                                        <img
                                            src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                            alt="{{ $blog->title }}"
                                            class="manage-modal-image">

                                        <div class="small text-muted mt-2">

                                            Current Image

                                        </div>

                                    </div>

                                @endif

                                {{-- TITLE --}}

                                <div class="mb-3">

                                    <label class="form-label fw-semibold">

                                        Blog Title

                                    </label>

                                    <input
                                        type="text"
                                        name="title"
                                        value="{{ $blog->title }}"
                                        class="form-control"
                                        required>

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
                                        required>{{ $blog->description }}</textarea>

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
                                        accept="image/jpeg,image/png,image/jpg,image/webp">

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

                                        Update Blog

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
                    class="fa-solid fa-newspaper text-primary mb-3"
                    style="font-size:45px;">
                </i>

                <h5 class="fw-bold">

                    No Blogs Found

                </h5>

                <p class="text-muted small mb-0">

                    You haven't added any blog posts yet.

                </p>

            </div>

        @endforelse

    </div>

</div>

</div>
@endsection