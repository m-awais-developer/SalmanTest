
@extends('master.layout')

@section('title', $service->title)

@section('content')

<section class="service-detail-section">

    <div class="container">

        <div class="service-detail-card">

            {{-- =====================================================
                 IMAGE
            ====================================================== --}}
            <div class="service-detail-image">

                @if(!empty($service->image))

                    <img
                        src="{{ asset('storage/services/' . $service->image) }}"
                        alt="{{ $service->title }}"
                    >

                @else

                    <img
                        src="{{ asset('img/service-1.jpg') }}"
                        alt="{{ $service->title }}"
                    >

                @endif

            </div>


            {{-- =====================================================
                 CONTENT
            ====================================================== --}}
            <div class="service-detail-content">

                {{-- ================= TITLE ================= --}}
                <h1 class="service-detail-title">
                    {{ $service->title }}
                </h1>


                {{-- ================= DESCRIPTION ================= --}}
                @if(!empty($service->description))

                    <p class="service-detail-description">
                        {{ $service->description }}
                    </p>

                @endif


             


                {{-- ================= DIVIDER ================= --}}
                @if(!empty($service->tagline) || !empty($service->detail))

                    <div class="service-divider">

                        <span></span>

                        <i class="bi bi-heart-pulse-fill"></i>

                        <span></span>

                    </div>

                @endif
                       
               {{-- ================= TAGLINE ================= --}}
                @if(!empty($service->tagline))

                    <div class="service-detail-tagline">
                       <h2> {{ $service->tagline }}</h2>
                    </div>

                @endif

                {{-- ================= DETAIL ================= --}}
                @if(!empty($service->detail))

                    {{-- Detail Heading --}}
                    <h2 class="service-detail-heading">
                        Detail
                    </h2>


                    {{-- Detail Content --}}
                    <div class="service-full-detail">
                        {!! nl2br(e($service->detail)) !!}
                    </div>

                @endif


                {{-- ================= BACK BUTTON ================= --}}
                <div class="service-back-area">

                    <a
                        href="{{ route('services') }}"
                        class="service-back-btn"
                    >

                        <i class="bi bi-arrow-left"></i>

                        <span>Back to Services</span>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =============================================================
     PAGE CSS
============================================================= --}}

<style>

/* =============================================================
   MAIN SECTION
============================================================= */

.service-detail-section {
    width: 100%;
    background: #f8fbfc;
    padding: 60px 0 90px;
    min-height: calc(100vh - 150px);
}

.service-detail-section .container {
    width: 100%;
}


/* =============================================================
   MAIN CARD
============================================================= */

.service-detail-card {
    width: 100%;
    max-width: 1000px;

    margin: 0 auto;

    background: #ffffff;

    border-radius: 18px;

    overflow: hidden;

    box-shadow:
        0 10px 35px rgba(0, 0, 0, 0.08);
}


/* =============================================================
   IMAGE
============================================================= */

.service-detail-image {
    width: 100%;
    height: 480px;

    overflow: hidden;

    background: #eef5f7;
}

.service-detail-image img {
    width: 100%;
    height: 100%;

    display: block;

    object-fit: cover;
}


/* =============================================================
   CONTENT
============================================================= */

.service-detail-content {
    width: 100%;

    padding: 45px 55px 55px;

    text-align: center;
}


/* =============================================================
   TITLE
============================================================= */

.service-detail-title {
    margin: 0 0 20px;

    font-size: 40px;
    font-weight: 700;

    line-height: 1.25;

    color: #1d2d35;
}


/* =============================================================
   DESCRIPTION
============================================================= */

.service-detail-description {
    max-width: 800px;

    margin: 0 auto 22px;

    font-size: 17px;

    line-height: 1.8;

    color: #68757c;
}


/* =============================================================
   TAGLINE
============================================================= */

.service-detail-tagline {
    max-width: 800px;

    margin: 0 auto 25px;

    font-size: 19px;

    font-weight: 700;

    line-height: 1.6;

    /* Same color as title */
    color: #1d2d35;
}


/* =============================================================
   DIVIDER
============================================================= */

.service-divider {
    width: 100%;

    max-width: 650px;

    margin: 30px auto 35px;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 14px;
}

.service-divider span {
    height: 1px;

    flex: 1;

    background: #dce7ea;
}

.service-divider i {
    width: 42px;
    height: 42px;

    flex-shrink: 0;

    border-radius: 50%;

    background: #13c5dd;

    color: #ffffff;

    display: flex;

    align-items: center;

    justify-content: center;

    font-size: 17px;

    box-shadow:
        0 5px 15px rgba(19, 197, 221, 0.25);
}


/* =============================================================
   DETAIL HEADING
============================================================= */

.service-detail-heading {
    width: 100%;

    max-width: 850px;

    margin: 0 auto 20px;

    text-align: left;

    font-size: 28px;

    font-weight: 700;

    line-height: 1.3;

    color: #1d2d35;
}


/* =============================================================
   DETAIL CONTENT
============================================================= */

.service-full-detail {
    width: 100%;

    max-width: 850px;

    margin: 0 auto;

    text-align: left;

    color: #56646b;

    font-size: 16px;

    line-height: 1.9;

    word-wrap: break-word;
}


/* =============================================================
   BACK BUTTON
============================================================= */

.service-back-area {
    margin-top: 40px;

    text-align: center;
}

.service-back-btn {
    display: inline-flex;

    align-items: center;

    justify-content: center;

    gap: 9px;

    padding: 12px 25px;

    background: #13c5dd;

    color: #ffffff !important;

    border-radius: 50px;

    text-decoration: none !important;

    font-size: 15px;

    font-weight: 600;

    transition: all 0.3s ease;
}

.service-back-btn:hover {
    background: #0fb1c8;

    color: #ffffff !important;

    transform: translateY(-2px);

    box-shadow:
        0 7px 18px rgba(19, 197, 221, 0.25);
}


/* =============================================================
   TABLET
============================================================= */

@media (max-width: 991px) {

    .service-detail-section {
        padding: 45px 0 70px;
    }

    .service-detail-image {
        height: 400px;
    }

    .service-detail-content {
        padding: 38px 35px 45px;
    }

    .service-detail-title {
        font-size: 34px;
    }

    .service-detail-heading {
        font-size: 26px;
    }

}


/* =============================================================
   MOBILE
============================================================= */

@media (max-width: 767px) {

    .service-detail-section {
        padding: 30px 0 50px;

        min-height: auto;
    }

    .service-detail-section .container {
        padding-left: 15px;
        padding-right: 15px;
    }

    .service-detail-card {
        border-radius: 12px;
    }

    .service-detail-image {
        height: 280px;
    }

    .service-detail-content {
        padding: 30px 20px 35px;
    }

    .service-detail-title {
        font-size: 28px;
    }

    .service-detail-description {
        font-size: 15px;

        line-height: 1.7;
    }

    .service-detail-tagline {
        font-size: 17px;
    }

    .service-detail-heading {
        font-size: 23px;

        margin-bottom: 16px;
    }

    .service-full-detail {
        font-size: 15px;

        line-height: 1.8;
    }

    .service-divider {
        margin: 25px auto 30px;
    }

}


/* =============================================================
   SMALL MOBILE
============================================================= */

@media (max-width: 480px) {

    .service-detail-image {
        height: 220px;
    }

    .service-detail-content {
        padding: 25px 16px 30px;
    }

    .service-detail-title {
        font-size: 24px;
    }

    .service-detail-tagline {
        font-size: 16px;
    }

    .service-detail-heading {
        font-size: 21px;
    }

    .service-back-btn {
        padding: 11px 20px;

        font-size: 14px;
    }

}

</style>

@endsection
