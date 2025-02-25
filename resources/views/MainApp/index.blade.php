@extends('layouts.mainApp')

@section('title', 'Homepage')

@section('content')

    <!-- BANNER
                            ================================================== -->
    <section class="full-screen py-0 top-position">
        <div class="slider-fade owl-carousel owl-theme w-100 h-100">
            <div class="item bg-img cover-background left-overlay-dark" data-overlay-dark="75"
                data-background="{{ asset('assets/img/banner/banner-1.jpg') }}">

                <div class="container h-100">
                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle">
                            <div class="row position-relative">
                                <div class="col-md-10 col-lg-9 col-xl-8 z-index-3 position-relative">
                                    <div class="banner-style01">
                                        <span class="sec-title3 display-29 display-lg-28 text-secondary text-shadow">Quality
                                            Healthcare for Everyone</span>
                                        <h1 class="text-white text-shadow fadeInUp mb-2-4">Affordable Health Services</h1>
                                        <a href="#!" class="btn-style1 fadeInUp">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item bg-img cover-background left-overlay-dark" data-overlay-dark="75"
                data-background="{{ asset('assets/img/banner/banner-2.jpg') }}">
                <div class="container h-100">
                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle">
                            <div class="row position-relative">
                                <div class="col-md-10 col-lg-9 col-xl-8 z-index-3 position-relative">
                                    <div class="banner-style01 pt-13 pt-sm-0 pb-7 pb-sm-0">
                                        <span class="sec-title3 display-29 display-lg-28 text-secondary text-shadow">Partner
                                            with Us for Better Healthcare</span>
                                        <h1 class="text-white text-shadow fadeInUp mb-2-4">Empowering Healthcare Providers
                                        </h1>
                                        <a href="#!" class="btn-style1 fadeInUp">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item bg-img cover-background left-overlay-dark" data-overlay-dark="75"
                data-background="{{ asset('assets/img/banner/banner-3.jpg') }}">
                <div class="container h-100">
                    <div class="d-table w-100 h-100">
                        <div class="d-table-cell align-middle">
                            <div class="row position-relative">
                                <div class="col-md-10 col-lg-9 col-xl-8 z-index-3 position-relative">
                                    <div class="banner-style01 pt-13 pt-sm-0 pb-7 pb-sm-0">
                                        <span
                                            class="sec-title3 display-29 display-lg-28 text-secondary text-shadow">Seamless
                                            Digital Health Solutions</span>
                                        <h1 class="text-white text-shadow fadeInUp mb-2-4">Effortless Healthcare Access</h1>
                                        <a href="#!" class="btn-style1 fadeInUp">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS
                            ================================================== -->
    <section class="p-0 process-style2 mt-2-2">
        <div class="container-fluid px-sm-6 px-md-10">
            <div class="row">
                <div class="col-xl-6">
                    <div class="row h-100 mt-n1-9">
                        <div class="col-md-6 mt-1-9">
                            <div class="process-box bg-secondary">
                                <div class="process-nomber">
                                    <h2 class="text-white">01</h2>
                                </div>
                                <div class="mb-2-9">
                                    <i class="fas fa-heartbeat text-white" style="font-size: 150px"></i>
                                </div>
                                <div class="process-hover">
                                    <h3 class="mb-1-9 h1 w-md-80 text-white h4">Health Service</h3>
                                    <p class="mb-0 text-white w-80">Comprehensive Health Service Management.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-1-9">
                            <div class="process-box bg-primary">
                                <div class="process-nomber primary">
                                    <h2 class="text-white">02</h2>
                                </div>
                                <div class="mb-2-9">
                                    <i class="fas fa-handshake text-white" style="font-size: 150px"></i>
                                </div>
                                <div class="process-hover">
                                    <h3 class="mb-1-9 h1 w-md-80 w-lg-70 text-white h4">Partnerships</h3>
                                    <p class="mb-0 text-white w-80">Partnerships with Leading Healthcare Providers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="process-img-box border-radius-10 bg-img position-relative h-100 cover-background"
                        data-overlay-dark="5" data-background="{{ asset('assets/img/content/process-01.jpg') }}">
                        <div class="process-nomber primary">
                            <h2 class="text-white">03</h2>
                        </div>
                        <div class="process-img process-img-hover">
                            <h2 class="text-white mb-1-9 w-60">Easy Enrollments</h2>
                            <p class="text-white w-60">Easy Enrollment for Individuals & Organizations</p>
                            <a href="javascript:void(0)" class="text-white text-secondary-hover">Book a Class</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT US
                            ================================================== -->
    <section class="about-1">
        <div class="container">
            <div>
                <span class="sec-title3 text-secondary">About Us</span>
                <h2 class="display-6 font-weight-700 mb-1-9 z-index-2 position-relative w-lg-70 w-xl-60 w-xxl-50">We
                    prioritize the needs of our enrollees and partners.</h2>
            </div>
            <div class="row align-items-center mt-n1-9">
                <div class="col-xl-6 mt-1-9">
                    <div>
                        <img src="{{ asset('assets/img/content/about6.jpg') }}" class="border-radius-10"
                            alt="Epic Health Benefits">
                    </div>
                </div>
                <div class="col-xl-6 mt-1-9">
                    <div>
                        <div class="d-flex align-items-center mb-2 mb-xl-1-6">
                            <div class="display-4 text-secondary me-2">O</div>
                            <p class="mb-0">Health Benefits is a leading health services management company committed to
                                ensuring the smooth operation of healthcare delivery.</p>
                        </div>
                        <p> We bridge the gap between enrollees and healthcare providers by offering seamless health service
                            solutions that prioritize accessibility, efficiency, and quality care..</p>
                        <ul class="about-list list-unstyled mb-2-9">
                            <li class="position-relative mb-2">Integrity – We uphold the highest standards of
                                professionalism and transparency.</li>
                            <li class="position-relative mb-2">Innovation – We leverage technology to improve healthcare
                                delivery.</li>
                            <li class="position-relative">Accessibility – Quality healthcare should be available to everyone
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR SERVICES
                            ================================================== -->
    <section class="bg-light ">
        <div class="container">
            <div class="text-center">
                <span class="sec-title3 text-secondary">Our Services</span>
                <h2 class="display-6 font-weight-700 mb-1-9 z-index-2 position-relative w-lg-70 w-xl-50 mx-lg-auto">
                    We bridge the gap between enrollees and healthcare providers</h2>
            </div>
            <div class="row clearfix mt-n1-9">
                <div class="col-lg-4 col-md-6 col-sm-12 mt-1-9">
                    <div class="card card-style1 wow fadeInUp h-100" data-wow-delay="100ms">
                        <div class="image-box">
                            <a href="#!"><img src="{{ asset('assets/img/service/services-01.jpg') }}"
                                    alt="Epic Health Benefits"></a>
                        </div>
                        <div class="lower-content text-center">
                            <h3><a href="#!">Health Service Management</a></h3>
                            <p>We oversee the coordination and administration of healthcare services, ensuring enrollees
                                receive the right medical care at the right time.
                            </p>
                            <h5 class="h6 mb-0"><a href="#!">Read more</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-1-9">
                    <div class="card-style1 wow fadeInUp h-100" data-wow-delay="200ms">
                        <div class="image-box">
                            <a href="#!"><img src="{{ asset('assets/img/service/services-02.jpg') }}"
                                    alt=""></a>
                        </div>
                        <div class="lower-content text-center">
                            <h3><a href="#!">Health Insurance & Enrolment</a></h3>
                            <p>Our enrolment process connects individuals, families, and organizations to the best
                                healthcare plans suited to their needs.</p>
                            <h5 class="h6 mb-0"><a href="#!">Read more</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-1-9">
                    <div class="card-style1 wow fadeInUp h-100" data-wow-delay="300ms">
                        <div class="image-box">
                            <a href="#!"><img src="{{ asset('assets/img/service/services-03.jpg') }}"
                                    alt=""></a>
                        </div>
                        <div class="lower-content text-center">
                            <h3><a href="#!">Healthcare Provider Partnerships</a></h3>
                            <p>We collaborate with hospitals, clinics, pharmacies, and healthcare professionals to offer
                                enrollees a vast network of trusted healthcare providers.</p>
                            <h5 class="h6 mb-0"><a href="#!">Read more</a></h5>
                        </div>
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

    <!-- BLOG
                            ================================================== -->
    <section>
        <div class="container">
            <div class="text-center">
                <span class="sec-title3 text-secondary">Our Blog</span>
                <h2 class="display-6 font-weight-700 mb-1-9 z-index-2 position-relative w-lg-70 w-xl-50 mx-lg-auto">Latest
                    articles and news updated weekly</h2>
            </div>
            <div class="row g-xl-5 mt-n1-9">
                <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="200ms">
                    <article class="card card-style3 h-100">
                        <img src="{{ asset('assets/img/blog/placeholder.jpg') }}" alt="Epic Health Benefits">
                        <div class="card-body">
                            <ul class="list-style3">
                                <li>01 Mar, 2024</li>
                                <li><a href="#!">Comments</a> (<span>08</span>)</li>
                            </ul>
                            <h4 class="mb-3"><a href="javascript:void(0)">Five important life lessons health benefits
                                    taught us.</a>
                            </h4>
                            <p class="card-text">It's undeniably true that a peruser will be occupied by the substance of a
                                page while checking its design out.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="350ms">
                    <article class="card card-style3 h-100">
                        <img src="{{ asset('assets/img/blog/placeholder.jpg') }}" alt="Epic Health Benefits">
                        <div class="card-body">
                            <ul class="list-style3">
                                <li>18 Feb, 2024</li>
                                <li><a href="#!">Comments</a> (<span>06</span>)</li>
                            </ul>
                            <h4 class="mb-3"><a href="javascript:void(0)">Seven things you most likely didn't know about
                                    health benefits!</a></h4>
                            <p class="card-text">It's undeniably true that a peruser will be occupied by the substance of a
                                page while checking its design out.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4 mt-1-9 wow fadeInUp" data-wow-delay="500ms">
                    <article class="card card-style3 h-100">
                        <img src="{{ asset('assets/img/blog/placeholder.jpg') }}" alt="Epic Health Benefits">
                        <div class="card-body">
                            <ul class="list-style3">
                                <li>24 Jan, 2024</li>
                                <li><a href="#!">Comments</a> (<span>04</span>)</li>
                            </ul>
                            <h4 class="mb-3"><a href="javascript:void(0)">The five secrets that you shouldn't know about
                                    health benefits!</a></h4>
                            <p class="card-text">It's undeniably true that a peruser will be occupied by the substance of a
                                page while checking its design out.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

@endsection
