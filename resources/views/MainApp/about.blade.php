@extends('layouts.mainApp')

@section('title', 'About Us')

@section('content')

    <!-- PAGE TITLE
                    ================================================== -->
    <section class="page-title-section bg-img cover-background theme-overlay-dark-blue left-overlay-dark top-position"
        data-overlay-dark="6" data-background="{{ asset('assets/img/bg/bg-05.jpg') }}">
        <div class="container">
            <div class="row text-center align-items-center justify-content-center">
                <div class="col-md-12">
                    <h1 class="text-white mb-1-6">About Us</h1>
                    <ul>
                        <li><a href="{{ route('homepage') }}">Home</a></li>
                        <li>About us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT
                        ================================================== -->
    <section class="about-3">
        <div class="container">
            <div class="row align-items-center mt-n1-9">
                <div class="col-xl-6 mt-1-9">
                    <div class="about-img text-xl-end">
                        <div class="image-box">
                            <img src="{{ asset('assets/img/content/about4.jpg') }}" alt="Epic Health Benefits">
                            <div class="img-text">
                                <h2 class="text-white display-6 font-weight-700 countup">18</h2>
                                <h5 class="text-white">year experience</h5>
                            </div>
                        </div>
                        <div>
                            <img src="{{ asset('assets/img/content/about5.jpg') }}" alt="Epic Health Benefits">
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-6 mt-1-9">
                    <div class="ps-xl-6">
                        <div>
                            <span class="sec-title3 text-secondary">About Us</span>
                            <h2 class="display-5 font-weight-700 mb-1-9 z-index-2 position-relative">Your Trusted Health
                                Service Partner</h2>
                        </div>
                        <p>Health Benefits is a leading health services management company committed to ensuring the smooth
                            operation of healthcare delivery. We bridge the gap between enrollees and healthcare providers
                            by offering seamless health service solutions that prioritize accessibility, efficiency, and
                            quality care.
                        </p>
                        <div class="d-flex about-text mb-1-9">
                            <div class="flex-shrink-0">
                                <i class="fa-brands fa-envira display-8 text-primary lh-1"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="h5">Our Mission</h4>
                                <p class="mb-0">To enhance healthcare accessibility and efficiency through innovative
                                    health service management solutions.</p>
                            </div>
                        </div>
                        <div class="d-flex about-text mb-1-9">
                            <div class="flex-shrink-0">
                                <i class="fa-brands fa-pagelines display-8 text-primary lh-1"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="h5">Our Vision</h4>
                                <p class="mb-0">To be the most trusted health services management company, ensuring
                                    seamless and affordable healthcare for all.</p>
                            </div>
                        </div>
                        <a class="btn-style1" href="#!">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COUNTER
                        ================================================== -->
    <section class="bg-dark position-relative">
        <div class="container">
            <div class="row mt-n1-9">
                <div class="col-sm-6 col-lg-4 mt-1-9">
                    <div class="counter-style-01">
                        <div class="counter-icon text-primary">
                            <i class="fas fa-calendar-alt fa-1x"></i>
                        </div>
                        <h2 class="text-secondary display-10 display-md-9 display-xl-8"><span class="countup">980</span>+
                        </h2>
                        <p class="text-white font-weight-700 display-28 mb-0">Events</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-1-9">
                    <div class="counter-style-01">
                        <div class="counter-icon text-primary">
                            <i class="fas fa-handshake fa-1x"></i>
                        </div>
                        <h2 class="text-secondary display-10 display-md-9 display-xl-8"><span class="countup">90</span>+
                        </h2>
                        <p class="text-white font-weight-700 display-28 mb-0">Partners</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-1-9">
                    <div class="counter-style-01">
                        <div class="counter-icon text-primary">
                            <i class="fas fa-user-check fa-1x"></i>
                        </div>
                        <h2 class="text-secondary display-10 display-md-9 display-xl-8"><span class="countup">42</span>+
                        </h2>
                        <p class="text-white font-weight-700 display-28 mb-0">Enrollees</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-n70 opacity4 left-n20 d-none d-xl-block">
            <img src="{{ asset('assets/img/content/flower16.png') }}" class="opacity3" alt="Epic Health Benefits">
        </div>
        <div class="position-absolute top-n70 opacity4 right-n20 d-none d-xl-block">
            <img src="{{ asset('assets/img/content/flower16.png') }}" class="opacity3" alt="Epic Health Benefits">
        </div>
    </section>

    <!-- WHY CHOOSE US
                        ================================================== -->
    <section class="p-0 bg-light">
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="bg-img h-100 cover-background" data-overlay-dark="0"
                        data-background="{{ asset('assets/img/content/why-choose01.jpg') }}"></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-sm-1-9 p-xl-6 why-choose-02">
                        <div class="d-flex why-choose xl-align-items-center mb-2-9 wow fadeInUp" data-wow-delay="100ms">
                            <div class="icon-box-icon">
                                <div class="icon-inner">
                                    <div class="icon-wrap -img">
                                        <img src="{{ asset('assets/img/icon/icon-1.png') }}" alt="Epic Health Benefits">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="mt-2 h4">Integrity</h3>
                                <p class="mb-0 w-sm-80">We uphold the highest standards of professionalism and transparency.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex why-choose xl-align-items-center mb-2-9 wow fadeInUp" data-wow-delay="200ms">
                            <div class="icon-box-icon">
                                <div class="icon-inner">
                                    <div class="icon-wrap -img">
                                        <img src="{{ asset('assets/img/icon/icon-2.png') }}" alt="Epic Health Benefits">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="mt-2 h4">Innovation</h3>
                                <p class="mb-0 w-sm-80">We leverage technology to improve healthcare delivery.</p>
                            </div>
                        </div>
                        <div class="d-flex why-choose xl-align-items-center mb-2-9 wow fadeInUp" data-wow-delay="300ms">
                            <div class="icon-box-icon">
                                <div class="icon-inner">
                                    <div class="icon-wrap -img">
                                        <img src="{{ asset('assets/img/icon/icon-3.png') }}" alt="Epic Health Benefits">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="mt-2 h4">Accessibility</h3>
                                <p class="mb-0 w-sm-80">Quality healthcare should be available to everyone.</p>
                            </div>
                        </div>
                        <div class="d-flex why-choose align-items-xl-center wow fadeInUp" data-wow-delay="400ms">
                            <div class="icon-box-icon">
                                <div class="icon-inner">
                                    <div class="icon-wrap -img">
                                        <img src="{{ asset('assets/img/icon/icon-4.png') }}" alt="Epic Health Benefits">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h3 class="mt-2 h4">Customer-Centric Approach</h3>
                                <p class="mb-0 w-sm-80">We prioritize the needs of our enrollees and partners.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
