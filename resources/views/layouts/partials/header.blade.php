<header class="header-style1 menu_area-light">
    <div class="navbar-default">

        <!-- start top search -->
        <div class="top-search bg-secondary">
            <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
                <form class="search-form" action="javascript:void(0)" method="GET"
                    accept-charset="utf-8">
                    <div class="input-group">
                        <span class="input-group-addon cursor-pointer">
                            <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                        </span>
                        <input type="text" class="search-form_input form-control" name="s" autocomplete="off"
                            placeholder="Type & hit enter...">
                        <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- end top search -->

        <div class="container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="menu_area alt-font">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">
                            <div class="navbar-header navbar-header-custom">
                                <!-- start logo -->
                                {{-- <a href="{{ route('homepage') }}" class="navbar-brand"><img id="logo" src="{{ asset('assets/img/logos/logo-inner.png') }}" alt="Epic Health Benefits"></a> --}}
                                <a href="index.html" class="navbar-brand"><img id="logo" src="{{ asset('assets/img/logos/logo-inner.png') }}" alt="logo"></a>

                                <!-- end logo -->
                            </div>

                            <div class="navbar-toggler"></div>

                            <!-- start menu area -->
                            <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                <li class="{{ request()->routeIs('homepage') ? 'current' : '' }}">
                                    <a href="{{ route('homepage') }}">Home</a>
                                </li>
                                <li class="{{ request()->routeIs('about') ? 'current' : '' }}">
                                    <a href="{{ route('about') }}">About Us</a>
                                </li>
                                <li class="{{ request()->routeIs('services') ? 'current' : '' }}">
                                    <a href="{{ route('services') }}">Our Services</a>
                                </li>
                                <li class="{{ request()->routeIs('events') ? 'current' : '' }}">
                                    <a href="{{ route('events') }}">Events</a>
                                </li>
                                <li>
                                    <a href="#!">Membership</a>
                                    <ul>
                                        <li><a href="#!">Become a Partner</a>
                                            <ul>
                                                <li><a href="#!">Partners Login</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#!">Become an Enrollee</a>
                                            <ul>
                                                <li><a href="#!">Enrollee Login</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="{{ request()->routeIs('blog') ? 'current' : '' }}">
                                    <a href="{{ route('blog') }}">Blog</a>
                                </li>
                                <li class="{{ request()->routeIs('contact') ? 'current' : '' }}">
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>

                            </ul>
                            <!-- end menu area -->

                            <!-- start attribute navigation -->
                            <div class="attr-nav align-items-xl-center ms-xl-auto main-font">
                                <ul>
                                    <li class="search"><a href="#!"><i class="fas fa-search"></i></a></li>
                                    <li class="d-none d-xl-inline-block"><a href="javascript:void(0)"
                                            class="btn-style1 primary medium text-white">Become a Partner</a></li>
                                </ul>
                            </div>
                            <!-- end attribute navigation -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
