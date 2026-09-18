@extends('master.layout')

@section('title','Blog')

@section('content')

<!-- ==========================================
     BLOG SECTION
========================================== -->

<div class="container-fluid py-5">

    <div class="container">

        <!-- HEADER -->
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">

            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">
                Blog Post
            </h5>

            <h1 class="display-4">
                Our Latest Medical Blog Posts
            </h1>

        </div>


        <!-- BLOG GRID -->
        <div class="row g-5">

            @forelse($blogs as $blog)

                <div class="col-xl-4 col-lg-6">

                    <!-- BLOG CARD -->
                    <div class="blog-card bg-light rounded overflow-hidden shadow-sm h-100 d-flex flex-column">


                        <!-- IMAGE -->
                        <div class="blog-image-wrapper">

                            @if($blog->image)

                                <img
                                    class="img-fluid w-100 blog-card-image"
                                    src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                    alt="{{ $blog->title }}"
                                >

                            @else

                                <img
                                    class="img-fluid w-100 blog-card-image"
                                    src="{{ asset('img/blog-1.jpg') }}"
                                    alt="{{ $blog->title }}"
                                >

                            @endif

                        </div>


                        <!-- CONTENT -->
                        <div class="blog-content p-4 flex-grow-1">

                            <!-- TITLE -->
                            <h3 class="blog-title">
                                {{ $blog->title }}
                            </h3>


                            <!-- DESCRIPTION -->
                            <p class="blog-description">
                                {{ Str::limit($blog->description, 110, '...') }}
                            </p>


                            <!-- LEARN MORE BUTTON -->
                            <div class="blog-button-area">

                                <a
                                    href="{{ route('blog.detail', $blog->id) }}"
                                    class="blog-learn-more"
                                >

                                    <span>Learn More</span>

                                    <i class="bi bi-arrow-right"></i>

                                </a>

                            </div>

                        </div>


                        <!-- FOOTER -->
                        <div class="d-flex justify-content-between border-top p-4 bg-white mt-auto">

                            <div class="d-flex align-items-center">

                                <img
                                    class="rounded-circle me-2"
                                    src="{{ asset('img/user.jpg') }}"
                                    width="25"
                                    height="25"
                                    alt="Admin"
                                >

                                <small class="text-dark fw-medium">
                                    Admin
                                </small>

                            </div>


                            <div class="d-flex align-items-center text-muted">

                                <small class="ms-3">

                                    <i class="far fa-eye text-primary me-1"></i>

                                    0

                                </small>


                                <small class="ms-3">

                                    <i class="far fa-comment text-primary me-1"></i>

                                    0

                                </small>

                            </div>

                        </div>

                    </div>

                </div>


            @empty

                <!-- EMPTY STATE -->

                <div class="col-12 text-center py-5">

                    <i class="bi bi-journal-x text-muted display-1 d-block mb-3"></i>

                    <p class="text-muted fs-5">
                        No blog posts available at the moment.
                    </p>

                </div>

            @endforelse


            <!-- LOAD MORE -->

            @if($blogs->count() > 0)

                <div class="col-12 text-center mt-5">

                    <button class="btn btn-primary py-3 px-5 rounded-pill shadow-sm">

                        Load More Articles

                    </button>

                </div>

            @endif

        </div>

    </div>

</div>


<!-- ==========================================
     BLOG CARD CSS
========================================== -->

<style>

/* ==========================================
   BLOG CARD
========================================== */

.blog-card {

    position: relative;

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;

}


/* CARD HOVER */

.blog-card:hover {

    transform: translateY(-5px);

    box-shadow:
        0 15px 35px rgba(0, 0, 0, 0.12) !important;

}


/* ==========================================
   IMAGE
========================================== */

.blog-image-wrapper {

    width: 100%;

    height: 250px;

    overflow: hidden;

    background: #eef5f7;

}


.blog-card-image {

    width: 100%;

    height: 250px;

    object-fit: cover;

    display: block;

    transition:
        transform 0.5s ease;

}


/* IMAGE SLIGHT ZOOM */

.blog-card:hover .blog-card-image {

    transform: scale(1.03);

}


/* ==========================================
   CONTENT
========================================== */

.blog-content {

    position: relative;

    min-height: 250px;

    overflow: hidden;

}


/* ==========================================
   TITLE
========================================== */

.blog-title {

    margin: 0 0 14px;

    color: #212529;

    font-size: 23px;

    font-weight: 700;

    line-height: 1.35;

}


/* ==========================================
   DESCRIPTION
========================================== */

.blog-description {

    margin: 0;

    color: #6c757d;

    line-height: 1.7;

    padding-bottom: 55px;

}


/* ==========================================
   BUTTON AREA
   HIDDEN BY DEFAULT
========================================== */

.blog-button-area {

    position: absolute;

    left: 0;

    right: 0;

    bottom: -70px;

    width: 100%;

    display: flex;

    align-items: center;

    justify-content: center;

    opacity: 0;

    transform: translateY(25px);

    pointer-events: none;

    z-index: 10;

    transition:
        bottom 0.45s cubic-bezier(0.22, 1, 0.36, 1),
        opacity 0.3s ease,
        transform 0.45s cubic-bezier(0.22, 1, 0.36, 1);

}


/* ==========================================
   SHOW BUTTON ON CARD HOVER
========================================== */

.blog-card:hover .blog-button-area {

    bottom: 20px;

    opacity: 1;

    transform: translateY(0);

    pointer-events: auto;

}


/* ==========================================
   LEARN MORE BUTTON
========================================== */

.blog-learn-more {

    width: 140px;

    height: 45px;

    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 7px;

    padding: 0;

    background: #13c5dd;

    color: #ffffff !important;

    border-radius: 50px;

    text-decoration: none !important;

    font-size: 15px;

    font-weight: 600;

    line-height: 1;

    box-shadow:
        0 7px 18px rgba(19, 197, 221, 0.25);

    transition:
        background-color 0.3s ease,
        transform 0.3s ease,
        box-shadow 0.3s ease;

}


/* BUTTON HOVER */

.blog-learn-more:hover {

    background: #0fb1c8;

    color: #ffffff !important;

    transform: translateY(-3px);

    box-shadow:
        0 10px 22px rgba(19, 197, 221, 0.35);

}


/* ==========================================
   ARROW
========================================== */

.blog-learn-more i {

    font-size: 15px;

    transition:
        transform 0.3s ease;

}


.blog-learn-more:hover i {

    transform: translateX(5px);

}


/* ==========================================
   MOBILE
========================================== */

@media (max-width: 767px) {

    .blog-card:hover {

        transform: none;

    }


    .blog-card:hover .blog-card-image {

        transform: none;

    }


    .blog-button-area {

        position: static;

        margin-top: 18px;

        opacity: 1;

        transform: none;

        pointer-events: auto;

        transition: none;

    }


    .blog-content {

        min-height: auto;

    }


    .blog-description {

        padding-bottom: 0;

    }

}

</style>


@endsection