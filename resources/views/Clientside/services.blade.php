@extends('master.layout')

@section('title', 'Services')

@section('content')

{{--
|--------------------------------------------------------------------------
| Services
|--------------------------------------------------------------------------
--}}

<section class="container-fluid py-5">

    <div class="container">

        <div class="text-center mx-auto mb-5" style="max-width: 600px;">

            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">
                Our Services
            </h5>

            <h1 class="display-4">
                Excellent Medical Services
            </h1>

            <p class="text-muted mt-3 mb-0">
                We provide quality healthcare services with professional care
                and modern medical facilities.
            </p>

        </div>


        <div class="row g-4">

            @forelse($services as $service)

                <div class="col-lg-4 col-md-6">

                    {{-- SERVICE CARD --}}
                    <div class="service-item bg-light rounded shadow-sm service-card">

                        {{-- IMAGE --}}
                        <div class="service-image">

                            @if($service->image)

                                <img
                                    src="{{ asset('storage/services/' . $service->image) }}"
                                    class="img-fluid w-100 service-card-image"
                                    alt="{{ $service->title }}"
                                >

                            @else

                                <img
                                    src="{{ asset('img/service-1.jpg') }}"
                                    class="img-fluid w-100 service-card-image"
                                    alt="{{ $service->title }}"
                                >

                            @endif

                        </div>


                        {{-- CONTENT --}}
                        <div class="service-content">

                            {{-- TITLE --}}
                            <h4 class="service-title">
                                {{ $service->title }}
                            </h4>


                            {{-- DESCRIPTION --}}
                            <p class="service-description">
                                {{ $service->description }}
                            </p>


                            {{-- BUTTON --}}
                            <div class="service-button-area">

                                <a
                                    href="{{ route('service.detail', $service->id) }}"
                                    class="learn-more-btn"
                                >
                                    <span>Learn More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>


            @empty

                <div class="col-12">

                    <div class="text-center py-5">

                        <i class="fa-regular fa-folder-open display-5 text-muted mb-3"></i>

                        <h5 class="text-dark">
                            No Medical Services Registered Yet
                        </h5>

                        <p class="text-secondary mb-0">
                            Please add service items through the dashboard panel.
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>


{{--
|--------------------------------------------------------------------------
| Appointment
|--------------------------------------------------------------------------
--}}

<section class="container-fluid bg-primary my-5 py-5">

    <div class="container py-5">

        <div class="row gx-5 align-items-center">

            <div class="col-lg-6 mb-5 mb-lg-0">

                <div class="mb-4">

                    <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">
                        Appointment
                    </h5>

                    <h1 class="display-4 text-white">
                        Make An Appointment For Your Family
                    </h1>

                </div>

                <p class="text-white mb-5">
                    Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum.
                    Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt
                    voluptua. Eos vero eos vero ea et dolore eirmod et.
                </p>


                <a
                    href="#!"
                    class="btn btn-dark rounded-pill py-3 px-5 me-3"
                >
                    Find Doctor
                </a>

                <a
                    href="#!"
                    class="btn btn-outline-dark rounded-pill py-3 px-5"
                >
                    Read More
                </a>

            </div>


            <div class="col-lg-6">

                <div class="bg-white text-center rounded p-5 shadow">

                    <h2 class="mb-4">
                        Book An Appointment
                    </h2>

                    <form>

                        <div class="row g-3">

                            <div class="col-12 col-sm-6">

                                <select
                                    class="form-select bg-light border-0"
                                    style="height: 55px;"
                                >

                                    <option selected>
                                        Choose Department
                                    </option>

                                    <option value="1">
                                        Department 1
                                    </option>

                                    <option value="2">
                                        Department 2
                                    </option>

                                    <option value="3">
                                        Department 3
                                    </option>

                                </select>

                            </div>


                            <div class="col-12 col-sm-6">

                                <select
                                    class="form-select bg-light border-0"
                                    style="height: 55px;"
                                >

                                    <option selected>
                                        Select Doctor
                                    </option>

                                    <option value="1">
                                        Doctor 1
                                    </option>

                                    <option value="2">
                                        Doctor 2
                                    </option>

                                    <option value="3">
                                        Doctor 3
                                    </option>

                                </select>

                            </div>


                            <div class="col-12 col-sm-6">

                                <input
                                    type="text"
                                    class="form-control bg-light border-0"
                                    placeholder="Your Name"
                                    style="height: 55px;"
                                >

                            </div>


                            <div class="col-12 col-sm-6">

                                <input
                                    type="email"
                                    class="form-control bg-light border-0"
                                    placeholder="Your Email"
                                    style="height: 55px;"
                                >

                            </div>


                            <div class="col-12 col-sm-6">

                                <div
                                    class="date"
                                    id="date"
                                    data-target-input="nearest"
                                >

                                    <input
                                        type="text"
                                        class="form-control bg-light border-0 datetimepicker-input"
                                        placeholder="Date"
                                        data-target="#date"
                                        data-toggle="datetimepicker"
                                        style="height: 55px;"
                                    >

                                </div>

                            </div>


                            <div class="col-12 col-sm-6">

                                <div
                                    class="time"
                                    id="time"
                                    data-target-input="nearest"
                                >

                                    <input
                                        type="text"
                                        class="form-control bg-light border-0 datetimepicker-input"
                                        placeholder="Time"
                                        data-target="#time"
                                        data-toggle="datetimepicker"
                                        style="height: 55px;"
                                    >

                                </div>

                            </div>


                            <div class="col-12">

                                <button
                                    class="btn btn-primary w-100 py-3"
                                    type="submit"
                                >
                                    Make An Appointment
                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>


{{--
|--------------------------------------------------------------------------
| Testimonials
|--------------------------------------------------------------------------
--}}

<section class="container-fluid py-5">

    <div class="container">

        <div class="text-center mx-auto mb-5" style="max-width: 600px;">

            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">
                Testimonial
            </h5>

            <h1 class="display-4">
                Patients Say About Our Services
            </h1>

        </div>


        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="owl-carousel testimonial-carousel">

                    @for($i = 1; $i <= 3; $i++)

                        <div class="testimonial-item text-center">

                            <div class="position-relative mb-5">

                                <img
                                    class="img-fluid rounded-circle mx-auto"
                                    src="{{ asset('img/testimonial-' . $i . '.jpg') }}"
                                    alt="Patient Testimonial"
                                >


                                <div
                                    class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm"
                                    style="
                                        width: 60px;
                                        height: 60px;
                                    "
                                >

                                    <i class="fa fa-quote-left fa-2x text-primary"></i>

                                </div>

                            </div>


                            <p class="fs-5 fw-normal text-secondary">

                                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et,
                                nonumy et labore et tempor diam tempor erat.

                            </p>


                            <hr class="w-25 mx-auto">


                            <h3>
                                Patient Name
                            </h3>

                            <h6 class="fw-normal text-primary mb-3">
                                Profession
                            </h6>

                        </div>

                    @endfor

                </div>

            </div>

        </div>

    </div>

</section>


{{--
|--------------------------------------------------------------------------
| Service Card CSS
|--------------------------------------------------------------------------
--}}

<style>

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

@endsection