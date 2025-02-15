@extends('layouts.default')
@section('title', "Home")
@section('content')
<section class="hero-section" id="section_1">
    <div class="section-overlay"></div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">

            <div class="col-12 mt-auto mb-5 text-center">
                <small>Festava Live Presents</small>

                <h1 class="text-white mb-5">Live Show 2025</h1>

                <a class="btn custom-btn smoothscroll" href="#section_2">Let's begin</a>
            </div>

            <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                <div class="date-wrap">
                    <h5 class="text-white">
                        <i class="custom-icon bi-clock me-2"></i>
                        10 - 12<sup>th</sup>, Dec 2023
                    </h5>
                </div>

                <div class="location-wrap mx-auto py-3 py-lg-0">
                    <h5 class="text-white">
                        <i class="custom-icon bi-geo-alt me-2"></i>
                        National Center, United States
                    </h5>
                </div>

                <div class="social-share">
                    <ul class="social-icon d-flex align-items-center justify-content-center">
                        <span class="text-white me-3">Share:</span>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-facebook"></span>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-twitter"></span>
                            </a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link">
                                <span class="bi-instagram"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="video-wrap">
        <video autoplay="" loop="" muted="" class="custom-video" poster="">
            <source src="video/pexels-2022395.mp4" type="video/mp4">

            Your browser does not support the video tag.
        </video>
    </div>
</section>

<section class="pricing-section section-padding section-bg" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-12 mx-auto">
                <h2 class="text-center mb-4">Get your Ticket</h2>
            </div>

            @foreach($lives as $live)
                <div class="col-lg-4 col-12 mb-4">
                    <div class="pricing-thumb p-4">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h3><small>{{ $live->name }}</small> ${{ $live->price }}</h3>

                            </div>
                            <p class="pricing-tag ms-auto">
                                <img src="{{ asset("storage/$live->liveImg") }}" alt="">
                            </p>
                        </div>

                        <ul class="pricing-list mt-3">
                            <li class="pricing-list-item">Venue - {{ $live->venue }}</li>

                            <li class="pricing-list-item">Date - {{ \Carbon\Carbon::parse($live->date)->isoFormat('DD MMMM, YYYY') }}</li>

                            <li class="pricing-list-item">Time - {{ $live->time }}</li>

                        </ul>

                        <a class="btn link-fx-1 color-contrast-higher mt-4" 
                            @if(auth()->check())
                                href="{{ route('ticket.create', $live->id) }}"
                            @else
                                href="{{ route('login') }}"
                            @endif>
                            <span class="ticket-icon">
                                Get  
                                <i class="bi bi-ticket-perforated"></i>
                            </span>
                            <svg class="icon" viewBox="0 0 32 32" aria-hidden="true">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="16" cy="16" r="15.5"></circle>
                                    <line x1="10" y1="18" x2="16" y2="12"></line>
                                    <line x1="16" y1="12" x2="22" y2="18"></line>
                                </g>
                            </svg>
                        </a>

                    </div>
                </div>
            @endforeach

            <!-- Modal -->
            <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Get your Ticket</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <h5>Selected Live Details:</h5>
                <p><strong>Name:</strong> <span id="liveName"></span></p>

                        <hr>

                        <form action="" method="POST">
                            @csrf
                            <input type="hidden" name="live_id" id="liveId">
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Select Quantity:</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1">
                            </div>

                            <p><strong>Total Price:</strong> $<span id="totalPrice"></span></p>

                            <button type="submit" class="btn btn-primary">Purchase Ticket</button>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section>

<section class="artists-section section-padding" id="section_3">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 text-center">
                <h2 class="mb-4">Meet Artists</h1>
            </div>

            @foreach($artists as $artist)
                <div class="col-lg-5 col-12">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="{{ Storage::exists("storage/$artist->profileImg") ? asset("storage/$artist->profileImg") : asset("images/artists/$artist->profileImg") }}" class="artists-image img-fluid">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Name:</strong>
                                {{ $artist-> name }}
                            </p>

                            <p>
                                <strong>Age:</strong>
                                {{ $artist-> age }}
                            </p>

                            <p>
                                <strong>Achievements</strong>
                                {{ $artist-> achievements }}
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Bio:</strong>
                                <a href="#">{{ $artist-> intro }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

<section class="about-section section-padding" id="section_4">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                <div class="services-info">
                    <h2 class="text-white mb-4">About Festava 2022</h2>

                    <p class="text-white">Festava Live is free CSS template provided by TemplateMo website. This
                        layout is built on Bootstrap v5.2.2 CSS library. You are free to use this template for
                        your commercial website.</p>

                    <h6 class="text-white mt-4">Once in Lifetime Experience</h6>

                    <p class="text-white">You are not allowed to redistribute the template ZIP file on any other
                        website without a permission.</p>

                    <h6 class="text-white mt-4">Whole Night Party</h6>

                    <p class="text-white">Please tell your friends about our website. Thank you.</p>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="about-text-wrap">
                    <img src="images/pexels-alexander-suhorucov-6457579.jpg" class="about-image img-fluid">

                    <div class="about-text-info d-flex">
                        <div class="d-flex">
                            <i class="about-text-icon bi-person"></i>
                        </div>


                        <div class="ms-4">
                            <h3>a happy moment</h3>

                            <p class="mb-0">your amazing festival experience with us</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="contact-section section-padding" id="section_5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h2 class="text-center mb-4">Interested? Let's talk</h2>

                <nav class="d-flex justify-content-center">
                    <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab"
                        role="tablist">
                        <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-ContactForm" type="button" role="tab"
                            aria-controls="nav-ContactForm" aria-selected="false">
                            <h5>Contact Form</h5>
                        </button>

                        <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-ContactMap" type="button" role="tab"
                            aria-controls="nav-ContactMap" aria-selected="false">
                            <h5>Google Maps</h5>
                        </button>
                    </div>
                </nav>

                <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
                        aria-labelledby="nav-ContactForm-tab">
                        <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post"
                            role="form">
                            <div class="contact-form-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="contact-name" id="contact-name"
                                            class="form-control" placeholder="Full name" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="email" name="contact-email" id="contact-email"
                                            pattern="[^ @]*@[^ @]*" class="form-control"
                                            placeholder="Email address" required>
                                    </div>
                                </div>

                                <input type="text" name="contact-company" id="contact-company"
                                    class="form-control" placeholder="Company" required>

                                <textarea name="contact-message" rows="3" class="form-control"
                                    id="contact-message" placeholder="Message"></textarea>

                                <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                    <button type="submit" class="form-control">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel"
                        aria-labelledby="nav-ContactMap-tab">
                        <iframe class="google-map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29974.469402870927!2d120.94861466021855!3d14.106066818082482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd777b1ab54c8f%3A0x6ecc514451ce2be8!2sTagaytay%2C%20Cavite%2C%20Philippines!5e1!3m2!1sen!2smy!4v1670344209509!5m2!1sen!2smy"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection