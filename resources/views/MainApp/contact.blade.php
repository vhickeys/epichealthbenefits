@extends('layouts.mainApp')

@section('title', 'Contact Us')

@section('content')

    <!-- PAGE TITLE
                            ================================================== -->
    <section class="page-title-section bg-img cover-background theme-overlay-dark-blue left-overlay-dark top-position"
        data-overlay-dark="6" data-background="{{ asset('assets/img/bg/bg-05.jpg') }}">
        <div class="container">
            <div class="row text-center align-items-center justify-content-center">
                <div class="col-md-12">
                    <h1 class="text-white mb-1-6">Contact Us</h1>
                    <ul>
                        <li><a href="{{ route('homepage') }}">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- CONTACT FORM
            ================================================== -->
    <section>
        <div class="container">
            <div class="row mt-n2-9">
                <div class="col-lg-5 col-xl-4 mt-2-6">
                    <div class="content-us">
                        <div class="bg-dark content-icons mb-1-9 d-flex p-1-6 p-sm-2-6 rounded">
                            <div class="flex-shrink-0 pe-3 pe-sm-1-9 content-icons">
                                <i class="fas fa-map-marker-alt display-15 mb-3 d-block"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="h4 mb-3 text-white">Location</h3>
                                <p class="mb-0 text-white">66 Guild Street 512B, Great North Town.</p>
                            </div>
                        </div>
                        <div class="bg-dark content-icons mb-1-9 d-flex p-1-6 p-sm-2-6 rounded">
                            <div class="flex-shrink-0 pe-3 pe-sm-1-9 content-icons">
                                <i class="fa-solid fa-phone mb-3 d-block"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="h4 mb-3 text-white">Phone</h3>
                                <p class="mb-1 text-white">(+44) 152-567-987</p>
                                <p class="mb-0 text-white">(+44) 123 456 789</p>
                            </div>
                        </div>
                        <div class="bg-dark content-icons d-flex p-1-6 p-sm-2-6 rounded">
                            <div class="flex-shrink-0 pe-3 pe-sm-1-9 content-icons">
                                <i class="fa-regular fa-envelope mb-3 d-block"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="h4 mb-3 text-white">Email</h3>
                                <p class="mb-1 text-white">info@example.com</p>
                                <p class="mb-0 text-white">www.example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8 mt-2-6">
                    <div class="bg-light p-1-6 p-sm-2-9">
                        <h4 class="mb-1-6">Get In Touch</h4>
                        <form class="contact quform" action="javascript:void(0)"
                            method="post" enctype="multipart/form-data" onclick="">
                            <div class="quform-elements">
                                <div class="row">

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="name">Your Name <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="name" type="text" name="name"
                                                    placeholder="Your name here" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="email">Your Email <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="email" type="text" name="email"
                                                    placeholder="Your email here" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="subject">Your Subject <span
                                                    class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <input class="form-control" id="subject" type="text" name="subject"
                                                    placeholder="Your subject here" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Text input element -->
                                    <div class="col-md-6">
                                        <div class="quform-element form-group">
                                            <label for="phone">Contact Number</label>
                                            <div class="quform-input">
                                                <input class="form-control" id="phone" type="text" name="phone"
                                                    placeholder="Your phone here" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Textarea element -->
                                    <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            <label for="message">Message <span class="quform-required">*</span></label>
                                            <div class="quform-input">
                                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Textarea element -->

                                    <!-- Begin Captcha element -->
                                    <div class="col-md-12">
                                        <div class="quform-element">
                                            <div class="form-group">
                                                <div class="quform-input">
                                                    <input class="form-control" id="type_the_word" type="text"
                                                        name="type_the_word" placeholder="Type the below word" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="quform-captcha">
                                                    <div class="quform-captcha-inner">
                                                        <img src="{{ asset('assets/quform/images/captcha/courier-new-light.png') }}"
                                                            alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Captcha element -->

                                    <!-- Begin Submit button -->
                                    <div class="col-md-12">
                                        <div class="quform-submit-inner">
                                            <button class="btn-style1 primary" type="submit">Send Message</button>
                                        </div>
                                        <div class="quform-loading-wrap text-start"><span class="quform-loading"></span>
                                        </div>
                                    </div>
                                    <!-- End Submit button -->

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
