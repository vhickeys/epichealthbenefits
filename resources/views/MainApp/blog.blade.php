@extends('layouts.mainApp')

@section('title', 'Blog')

@section('content')

    <!-- PAGE TITLE
                            ================================================== -->
    <section class="page-title-section bg-img cover-background theme-overlay-dark-blue left-overlay-dark top-position"
        data-overlay-dark="6" data-background="{{ asset('assets/img/bg/bg-05.jpg') }}">
        <div class="container">
            <div class="row text-center align-items-center justify-content-center">
                <div class="col-md-12">
                    <h1 class="text-white mb-1-6">Blog</h1>
                    <ul>
                        <li><a href="{{ route('homepage') }}">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- EVENT-LIST
                    ================================================== -->
    <section>
        <div class="container">
            <div class="row mt-n2-6 g-lg-5">
                <div class="alert alert-info">
                    No blog post listed at this moment. Please check again later!
                </div>
            </div>
        </div>
    </section>


@endsection
