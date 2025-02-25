@extends('layouts.mainApp')

@section('title', 'Our Services')

@section('content')

    <!-- PAGE TITLE
            ================================================== -->
    <section class="page-title-section bg-img cover-background theme-overlay-dark-blue left-overlay-dark top-position"
        data-overlay-dark="6" data-background="{{ asset('assets/img/bg/bg-05.jpg') }}">
        <div class="container">
            <div class="row text-center align-items-center justify-content-center">
                <div class="col-md-12">
                    <h1 class="text-white mb-1-6">Services</h1>
                    <ul>
                        <li><a href="{{ route('homepage') }}">Home</a></li>
                        <li>Our Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR SERVICES
            ================================================== -->
    <section class="bg-light ">
        <div class="container">
            <div class="row clearfix mt-n2-9">
                <div class="col-lg-4 col-md-6 mt-2-9">
                    <div class="card-style1 h-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="image-box">
                            <a href="javascript:void(0)"><img src="{{ asset('assets/img/service/services-01.jpg') }}" alt="..."></a>
                        </div>
                        <div class="lower-content text-center">
                            <h3><a href="javascript:void(0)">Health Service Management</a></h3>
                            <p>We oversee the coordination and administration of healthcare services, ensuring enrollees receive the right medical care at the right time.
                            </p>
                            <h5 class="h6 mb-0"><a href="javascript:void(0)">Read more</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-2-9">
                    <div class="card-style1 h-100 wow fadeInUp" data-wow-delay="200ms">
                        <div class="image-box">
                            <a href="javascript:void(0)"><img src="{{ asset('assets/img/service/services-02.jpg') }}" alt=""></a>
                        </div>
                        <div class="lower-content text-center">
                            <h3><a href="javascript:void(0)">Health Insurance & Enrolment</a></h3>
                            <p>Our enrolment process connects individuals, families, and organizations to the best healthcare plans suited to their needs.</p>
                            <h5 class="h6 mb-0"><a href="javascript:void(0)">Read more</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-2-9">
                    <div class="card-style1 h-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="image-box">
                            <a href="javascript:void(0)"><img src="{{ asset('assets/img/service/services-03.jpg') }}" alt=""></a>
                        </div>
                        <div class="lower-content text-center">
                            <h3><a href="javascript:void(0)">Healthcare Provider Partnerships</a></h3>
                            <p>We collaborate with hospitals, clinics, pharmacies, and healthcare professionals to offer enrollees a vast network of trusted healthcare providers.</p>
                            <h5 class="h6 mb-0"><a href="javascript:void(0)">Read more</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-2-9">
                    <div class="card-style1 h-100 wow fadeInUp" data-wow-delay="100ms">
                        <div class="image-box">
                            <a href="javascript:void(0)"><img src="{{ asset('assets/img/service/services-01.jpg') }}" alt=""></a>
                        </div>
                        <div class="lower-content text-center">
                            <h3><a href="javascript:void(0)">Wellness Programs</a></h3>
                            <p>We design and implement corporate and individual wellness programs, including preventive health screenings, fitness plans, and mental health support.</p>
                            <h5 class="h6 mb-0"><a href="javascript:void(0)">Read more</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-2-9">
                    <div class="card-style1 h-100 wow fadeInUp" data-wow-delay="200ms">
                        <div class="image-box">
                            <a href="javascript:void(0)"><img src="{{ asset('assets/img/service/services-02.jpg') }}" alt=""></a>
                        </div>
                        <div class="lower-content text-center">
                            <h3><a href="javascript:void(0)">Digital Health Solutions</a></h3>
                            <p>With our advanced digital platforms, enrollees and healthcare providers can seamlessly access healthcare records, manage appointments, and receive real-time updates.</p>
                            <h5 class="h6 mb-0"><a href="javascript:void(0)">Read more</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-2-9">
                    <div class="card-style1 h-100 wow fadeInUp" data-wow-delay="300ms">
                        <div class="image-box">
                            <a href="javascript:void(0)"><img src="{{ asset('assets/img/service/services-03.jpg') }}" alt=""></a>
                        </div>
                        <div class="lower-content text-center">
                            <h3><a href="javascript:void(0)">24/7 Support and Assistance</a></h3>
                            <p>Need help? Our dedicated support team is available round the clock to assist you with your health service needs.
                            </p>
                            <h5 class="h6 mb-0"><a href="javascript:void(0)">Read more</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EXTRA
            ================================================== -->
    <section class="bg-img pb-20 pb-lg-24 cover-background" data-overlay-dark="5" data-background="{{ asset('assets/img/bg/bg-02.jpg') }}">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center">
                        <h2 class="text-white mb-2-6 display-18 display-sm-9 display-lg-4 font-weight-800 mb-0">Need a reliable health service partner? Join Us Today!</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COUNTER
            ================================================== -->
    <section class="py-0 mt-n10 bg-transparent position-relative z-index-9">
        <div class="container-fluid px-2-9 px-md-8 px-xxl-22">
            <div class="bg-light rounded py-1-9 py-md-9 px-1-9">
                <div class="row mt-n1-9">
                    <div class="col-sm-6 col-lg-4 mt-1-9">
                        <div class="counter-style-02 border-lg-end text-center">
                            <div class="counter-icon text-primary">
                                <i class="fas fa-calendar-alt fa-1x"></i>
                            </div>
                            <h2 class="text-secondary display-8"><span class="countup">980</span>+</h2>
                            <p class="font-weight-700 display-28 mb-0">Events</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-1-9">
                        <div class="counter-style-02 border-lg-end text-center">
                            <div class="counter-icon text-primary">
                                <i class="fas fa-handshake fa-1x"></i>
                            </div>
                            <h2 class="text-secondary display-8"><span class="countup">90</span>+</h2>
                            <p class="font-weight-700 display-28 mb-0">Partners</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 mt-1-9">
                        <div class="counter-style-02 border-0 text-center">
                            <div class="counter-icon text-primary">
                                <i class="fas fa-user-check fa-1x"></i>
                            </div>
                            <h2 class="text-secondary display-8"><span class="countup">42</span>+</h2>
                            <p class="font-weight-700 display-28 mb-0">Enrollees</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
