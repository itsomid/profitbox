@extends('landing.master')
@section('header')
    ProfitBox
@endsection
@section('content')

    <div class="main" role="main">

        <!-- Hero -->
        <div class="ui-hero hero-lg hero-center hero-bg ui-curve hero-svg-layer-4 bg-dark-gray">
            <div class="container pb-4">
                <div class="row pt-2 pb-8">
                    <div class="col-sm-12" data-vertical_center="true" data-vertical_offset="16">
                        <h1 class="heading animate" data-show="fade-in-up-big" data-delay="100">
                            The <span class="text-red">easiest</span> &amp; most <span class="text-red">secure</span> online
                            chat room
                        </h1>
                        <!-- Form -->
                        <form autocomplete="on" class="pt-2">
                            <div class="form-group">
                                <div class="input-group">
                                    <!-- Email Input -->
                                    <input autocomplete="email" class="input form-control" data-validation="required"
                                           data-validation-error-msg="Invalid email" name="email"
                                           placeholder="Enter your email">
                                    <div class="input-group-append">
                                        <!-- Submit Button -->
                                        <button class="btn ui-gradient-peach">Lets go! <span class="fa fa-rocket"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- * Replace data-video with your youtube video id -->
                        <a href="#" class="ui-video-toggle mt-4" data-video="1C75bKax4Eg">
                            <span class="icon fa fa-play bg-red"></span> <span>How Applify Works</span>
                        </a>
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .ui-hero -->

        <!-- Intro Image -->
        <div class="section intro-image pt-0">
            <img src="website/assets/img/mockups/applify-browser-mockup.png" data-uhd data-max_width="1000"
                 class="shadow-xxl responsive-on-lg" alt="Applify - App Landing HTML Template"/>
        </div><!-- .intro-image -->

        <!-- App Features Section -->
        <div id="features" class="section pt-0">
            <div class="container ui-icon-blocks ui-blocks-h icons-lg">
                <div class="section-heading cente">
                    <h2 class="heading text-dark-gray">
                        Awesome Features
                    </h2>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore.
                    </p>
                </div><!-- .section-heading -->
                <div class="row">
                    <div class="col-sm-4 ui-icon-block">
                        <div class="icon icon-lg icon-circle icon-rocket text-red"></div>
                        <h4 class="text-dark-gray">Clean Design</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                    <div class="col-sm-4 ui-icon-block">
                        <div class="icon icon-lg icon-circle icon-ghost text-red"></div>
                        <h4 class="text-dark-gray">Bright Colors</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                    <div class="col-sm-4 ui-icon-block">
                        <div class="icon icon-lg icon-circle icon-trophy text-red"></div>
                        <h4 class="text-dark-gray">Multiple Demos</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section -->

        <!-- Steps Section -->
        <div id="how-it-works" class="section bg-light">
            <div class="container">
                <!-- Section Heading -->
                <div class="section-heading center">
                    <h2 class="heading text-dark-gray">
                        All in 3 Easy Steps
                    </h2>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div><!-- .section-heading -->

                <!-- UI Steps -->
                <div class="ui-showcase-blocks ui-steps">
                    <!-- Step 1 -->
                    <div class="step-wrapper">
                        <span class="step-number ui-gradient-blue">1</span>
                        <div class="row">
                            <div class="col-md-6" data-vertical_center="true">
                                <h4 class="heading text-dark-gray">
                                    Modern UI Design
                                </h4>
                                <p class="paragraph">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <a href="#" class="btn-link btn-arrow">Explore</a>
                            </div>
                            <div class="col-md-6">
                                <img class="responsive-on-xs" src="website/assets/img/mockups/applify-mockup-7.png" data-uhd
                                     alt="Applify - App Landing HTML Template" data-max_width="464"/>
                            </div>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="step-wrapper">
                        <span class="step-number ui-gradient-blue">2</span>
                        <div class="row">
                            <div class="col-md-6" data-vertical_center="true">
                                <h4 class="heading text-dark-gray">
                                    Photoshop Mockups included Free!
                                </h4>
                                <p class="paragraph">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit anim id est laborum.
                                </p>
                                <a href="#" class="btn-link btn-arrow">Explore</a>
                            </div>
                            <div class="col-md-6">
                                <img class="responsive-on-xs" src="website/assets/img/mockups/applify-mockup-8.png" data-uhd
                                     alt="Applify - App Landing HTML Template" data-max_width="445"/>
                            </div>
                        </div>
                    </div>
                    <!-- Step 2 -->
                    <div class="step-wrapper">
                        <span class="step-number ui-gradient-blue">3</span>
                        <div class="row">
                            <div class="col-md-6" data-vertical_center="true">
                                <h4 class="heading text-dark-gray">
                                    Built on Bootstrap 4
                                </h4>
                                <p class="paragraph">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit anim id est laborum.
                                </p>
                                <a href="#" class="btn-link btn-arrow">Explore</a>
                            </div>
                            <div class="col-sm-6">
                                <img class="responsive-on-xs" src="website/assets/img/mockups/applify-mockup-10.png" data-uhd
                                     alt="Applify - App Landing HTML Template" data-max_width="451"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .container -->
        </div><!-- .section -->

        <!-- Integration Section -->
        <div id="integrate" class="section ui-gradient-blue">
            <div class="container">
                <div class="row">

                    <!-- Left Column -->
                    <div class="col-lg-5 col-xl-6" data-vertical_center="true">

                        <!-- Section Heading -->
                        <div class="section-heading mb-2">
                            <h2 class="heading">
                                Applify Integrations
                            </h2>
                            <p class="paragraph">
                                Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Sed Do Eiusmod Tempor Incididunt Ut
                                Labore Et Dolore Magna Ali
                            </p>
                        </div><!-- .section-heading -->

                        <!-- Left blocks -->
                        <ul class="ui-icon-blocks ui-blocks-v icons-sm">
                            <li class="ui-icon-block">
                                <span class="icon icon-diamond"></span>
                                <p class="">
                                    Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Sed Do Eiusmod Tempor Incididunt
                                    Ut Labore Et Dolore
                                </p>
                                <a class="btn-link btn-arrow">
                                    Learn More
                                </a>
                            </li>
                            <li class="ui-icon-block">
                                <span class="icon icon-pie-chart"></span>
                                <p class="">
                                    Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit
                                </p>
                                <a class="btn-link btn-arrow">
                                    Learn More
                                </a>
                            </li>
                            <li class="ui-icon-block">
                                <span class="icon icon-layers"></span>
                                <p class="">
                                    Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Sed Do Eiusmod
                                </p>
                                <a class="btn-link btn-arrow">
                                    Learn More
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Right Column -->
                    <div class="col-lg-7 col-xl-6">

                        <!-- Logo Cloud -->
                        <div class="ui-logos-cloud">
                            <div data-size="4" class="mt-0 animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>
                            <div data-size="10" class="mt-0 animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>
                            <div data-size="7" class="mt-0 animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>

                            <!-- Flex Break -->
                            <span class="flex-break"></span>

                            <div data-size="4" class="animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>
                            <div data-size="10" class="animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>
                            <div data-size="4" class="animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>
                            <div data-size="6" class="animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>
                            <div data-size="3" class="animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>

                            <!-- Flex Break -->
                            <span class="flex-break"></span>

                            <div data-size="8" class="animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>
                            <div data-size="3" class="animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>
                            <div data-size="10" class="animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>
                            <div data-size="5" class="animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>

                            <!-- Flex Break -->
                            <span class="flex-break"></span>

                            <div data-size="3" class="animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>
                            <div data-size="10" class="animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>
                            <div data-size="7" class="animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>

                            <!-- Flex Break -->
                            <span class="flex-break"></span>

                            <div data-size="4" class="mb-0 animate" data-show="fade-in">
                                <img src="website/assets/img/3rd-party-logos/logo.png" data-uhd alt="Applif App Landing Page"/>
                            </div>
                        </div><!-- .ui-logo-cloud  -->

                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section -->

        <!-- Showcase Section -->
        <div class="section laptop-showcase">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-4" data-vertical_center="true">
                        <div>
                            <h2 class="heading text-dark-gray">
                                Designed For All Apps
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.
                            </p>
                            <ul class="ui-checklist mt-2">
                                <li>
                                    <h6 class="heading text-dark-gray">Consectetur adipisicing</h6>
                                </li>
                                <li>
                                    <h6 class="heading text-dark-gray">Eiusmod tempor incididunt</h6>
                                </li>
                                <li>
                                    <h6 class="heading text-dark-gray">Ut enim ad minim</h6>
                                </li>
                            </ul>
                            <a href="#" class="btn ui-gradient-peach">Download</a>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <img class="responsive-on-sm laptop" src="website/assets/img/mockups/applify-mockup-11.png" data-uhd
                             alt="Applify - App Landing HTML Template" data-max_width="1000"/>
                    </div>
                </div>

            </div><!-- .container -->
        </div><!-- .section -->

        <!-- Showcase Section -->
        <div class="section bg-light pb-6">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6 pb-5">
                        <img class="img-responsive" src="website/assets/img/mockups/applify-widget-mockup-2.png" data-uhd
                             alt="Applify - App Landing HTML Template"/>
                        <h5 class="text-dark-gray">Lorem Ipsum Dolor Sit</h5>
                        <p class="mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="col-md-6 pb-5">
                        <img class="img-responsive" src="website/assets/img/mockups/applify-widget-mockup-1.png" data-uhd
                             alt="Applify - App Landing HTML Template"/>
                        <h5 class="text-dark-gray">Lorem Ipsum Dolor Sit</h5>
                        <p class="mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div><!-- .container -->
        </div>

        <!-- Support Section -->
        <div id="support" class="section bg-dark-gray">
            <div class="container">
                <div class="row">
                    <!-- Text Column -->
                    <div class="col-lg-6 col-md-5" data-vertical_center="true">
                        <!-- Section Heading -->
                        <div class="section-heading mb-0 center-on-md">
                            <h2 class="heading">
                                Award-Winning Support
                            </h2>
                            <p class="paragraph">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            </p>
                            <div class="row ui-icon-blocks ui-blocks-h icons-md mt-2">
                                <div class="col-4 ui-icon-block animate text-left mb-0 center-on-md" data-show="fade-in-up">
                                    <div class="icon icon-phone"></div>
                                    <h4 class="heading mb-1">200k</h4>
                                    <p>
                                        Calls a day
                                    </p>
                                </div>
                                <div class="col-4 ui-icon-block animate text-left mb-0 center-on-md" data-show="fade-in-up">
                                    <div class="icon icon-trophy"></div>
                                    <h4 class="heading mb-1">4.5</h4>
                                    <p>
                                        Star Rating
                                    </p>
                                </div>
                                <div class="col-4 ui-icon-block animate text-left mb-0 center-on-md" data-show="fade-in-up">
                                    <div class="icon icon-support"></div>
                                    <h4 class="heading mb-1">500k</h4>
                                    <p>
                                        Experts working 24/7
                                    </p>
                                </div>
                            </div><!-- .row -->
                        </div><!-- .section-heading -->
                    </div>
                    <!-- Image Column -->
                    <div class="col-lg-6 col-md-7 img-block animate" data-show="fade-in-left" data-vertical_center="true">
                        <img src="website/assets/img/support/applify-support.png" alt="Applify - App Landing HTML Template" data-uhd
                             class="img-fluid" data-max_width="460"/>
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .section -->

        <!-- Pricing Cards Section -->
        <div id="pricing" class="section bg-light">
            <div class="container">
                <!-- Section Heading -->
                <div class="section-heading center">
                    <h2 class="heading text-dark-gray">
                        Pricing Cards
                    </h2>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div><!-- .section-heading -->

                <!-- UI Pricing Cards / Owl Carousel On Mobile -->
                <div class="ui-pricing-cards owl-carousel owl-theme">
                    <!-- Card 1 -->
                    <div class="ui-pricing-card animate" data-show="fade-in-left">
                        <div class="ui-card ui-curve shadow-lg">
                            <div class="card-header bg-dark-gray">
                                <!-- Heading -->
                                <h4 class="heading">Freelancer</h4>
                                <!-- Price -->
                                <div class="price text-red">
                                    <span class="curency">&pound;</span>
                                    <span class="price">23</span>
                                    <span class="period">/mo</span>
                                </div>
                                <h6 class="sub-heading">24/7 Support</h6>
                            </div>
                            <!-- Features -->
                            <div class="card-body">
                                <ul>
                                    <li>
                                        10 GB SSD Disk Space
                                    </li>
                                    <li>
                                        10 SDD Databases
                                    </li>
                                    <li>
                                        2 Subdomains
                                    </li>
                                    <li>
                                        25 Email Accounts
                                    </li>
                                </ul>
                                <a href="page-pricing.html" class="btn shadow-md ui-gradient-peach">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="ui-pricing-card active animate" data-show="fade-in">
                        <div class="ui-card ui-curve color-card shadow-xl">
                            <div class="card-header ui-gradient-peach">
                                <!-- Heading -->
                                <h4 class="heading">Start-up</h4>
                                <!-- Price -->
                                <div class="price">
                                    <span class="curency">&pound;</span>
                                    <span class="price">57</span>
                                    <span class="period">/mo</span>
                                </div>
                                <h6 class="sub-heading">24/7 Support</h6>
                            </div>
                            <!-- Features -->
                            <div class="card-body">
                                <ul>
                                    <li>
                                        20 GB SSD Disk Space
                                    </li>
                                    <li>
                                        20 SDD Databases
                                    </li>
                                    <li>
                                        4 Subdomains
                                    </li>
                                    <li>
                                        50 Email Accounts
                                    </li>
                                </ul>
                                <a href="page-pricing.html" class="btn bg-dark-gray shadow-md">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="ui-pricing-card animate" data-show="fade-in-right">
                        <div class="ui-card ui-curve shadow-lg">
                            <div class="card-header bg-dark-gray">
                                <!-- Heading -->
                                <h4 class="heading">Enterprise</h4>
                                <!-- Price -->
                                <div class="price text-red">
                                    <span class="curency">&pound;</span>
                                    <span class="price">89</span>
                                    <span class="period">/mo</span>
                                </div>
                                <h6 class="sub-heading">24/7 Support</h6>
                            </div>
                            <!-- Features -->
                            <div class="card-body">
                                <ul>
                                    <li>
                                        60 GB SSD Disk Space
                                    </li>
                                    <li>
                                        30 SDD Databases
                                    </li>
                                    <li>
                                        12 Subdomains
                                    </li>
                                    <li>
                                        200 Email Accounts
                                    </li>
                                </ul>
                                <a href="page-pricing.html" class="btn ui-gradient-peach shadow-md">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div><!-- .ui-pricing-cards -->

                <!-- Pricing Footer -->
                <div class="ui-pricing-footer">
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis.
                    </p>
                    <div class="actions">
                        <a class="btn">Learn More</a>
                    </div>
                </div><!-- .ui-pricing-footer -->

            </div><!-- .container -->
        </div><!-- .section -->

        <!--  Testimonial Section -->
        {{--<div class="section">--}}
            {{--<div class="container">--}}
                {{--<!-- Card Heading -->--}}
                {{--<div class="section-heading center">--}}
                    {{--<h2 class="heading text-dark-gray">--}}
                        {{--What People Say--}}
                    {{--</h2>--}}
                    {{--<p class="paragraph">--}}
                        {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
                    {{--</p>--}}
                {{--</div><!-- .section-heading -->--}}

                {{--<!-- Slider  -->--}}
                {{--<div class="ui-testimonials slider owl-carousel owl-theme">--}}
                    {{--<!-- Testimonials Item 1 -->--}}
                    {{--<div class="item">--}}
                        {{--<!-- Card -->--}}
                        {{--<div class="ui-card shadow-md">--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut--}}
                                {{--labore et dolore.</p>--}}
                        {{--</div>--}}
                        {{--<!-- User -->--}}
                        {{--<div class="user">--}}
                            {{--<div class="avatar"><img alt="Applify App Landing Page" src="website/assets/img/avatars/avatar1-sm.png">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<h6 class="heading text-dark-gray">Vicky Stout</h6>--}}
                                {{--<p class="sub-heading">Founder at Smith &amp; Co</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Testimonials Item 2 -->--}}
                    {{--<div class="item">--}}
                        {{--<!-- Card -->--}}
                        {{--<div class="ui-card shadow-md">--}}
                            {{--<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea--}}
                                {{--commodo.</p>--}}
                        {{--</div>--}}
                        {{--<!-- User -->--}}
                        {{--<div class="user">--}}
                            {{--<div class="avatar"><img alt="Applify App Landing Page" src="website/assets/img/avatars/avatar2-sm.png">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<h6 class="heading text-dark-gray">Jack Smith</h6>--}}
                                {{--<p class="sub-heading">Founder at Smith &amp; Co</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Testimonials Item 3 -->--}}
                    {{--<div class="item">--}}
                        {{--<!-- Card -->--}}
                        {{--<div class="ui-card shadow-md">--}}
                            {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla--}}
                                {{--pariaturin.</p>--}}
                        {{--</div>--}}
                        {{--<!-- User -->--}}
                        {{--<div class="user">--}}
                            {{--<div class="avatar"><img alt="Applify App Landing Page" src="website/assets/img/avatars/avatar3-sm.png">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<h6 class="heading text-dark-gray">Ch??rel Doe</h6>--}}
                                {{--<p class="sub-heading">Founder at Smith &amp; Co</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Testimonials Item 4 -->--}}
                    {{--<div class="item">--}}
                        {{--<!-- Card -->--}}
                        {{--<div class="ui-card shadow-md">--}}
                            {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla--}}
                                {{--pariatur ac nisi.</p>--}}
                        {{--</div>--}}
                        {{--<!-- User -->--}}
                        {{--<div class="user">--}}
                            {{--<div class="avatar"><img alt="Applify App Landing Page" src="website/assets/img/avatars/avatar4-sm.png">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<h6 class="heading text-dark-gray">Derick Watts</h6>--}}
                                {{--<p class="sub-heading">Founder at Smith &amp; Co</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Testimonials Item 5-->--}}
                    {{--<div class="item">--}}
                        {{--<!-- Card -->--}}
                        {{--<div class="ui-card shadow-md">--}}
                            {{--<p>Donec elementum ligula eu sapien consequat eleifend. Donec nec dolor erat, condimentum--}}
                                {{--sagittis.</p>--}}
                        {{--</div>--}}
                        {{--<!-- User -->--}}
                        {{--<div class="user">--}}
                            {{--<div class="avatar"><img alt="Applify App Landing Page" src="website/assets/img/avatars/avatar5-sm.png">--}}
                            {{--</div>--}}
                            {{--<div class="info">--}}
                                {{--<h6 class="heading text-dark-gray">Jane Austin</h6>--}}
                                {{--<p class="sub-heading">Founder at Smith &amp; Co</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div><!-- .ui-testimonials  -->--}}
            {{--</div><!-- .container -->--}}
        {{--</div><!-- .section -->--}}
        <div class="section bg-light">
            <div class="container">
                <div class="section-heading center">
                    <h2 class="heading text-indigo">
                        Frequently Asked
                    </h2>
                    <p class="paragraph">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis
                    </p>
                </div><!-- .section-heading -->
                <div class="row">
                    <div class="col-md-6" data-vertical_center="true">
                        <!-- Accordion -->
                        <div class="ui-accordion-panel ui-indigo">
                            <!-- Accordion 1  -->
                            <div class="ui-card shadow-sm ui-accordion active">
                                <h6 class="toggle" data-toggle="accordion-one">1. Lorem Ipsum Dolor Sit?</h6>
                                <div class="body in" data-accord="accordion-one" style="display: block;">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                            <!-- Accordion 2  -->
                            <div class="ui-card shadow-sm ui-accordion">
                                <h6 class="toggle" data-toggle="accordion-two">2. Amet Consectetur Adipisicing?</h6>
                                <div class="body" data-accord="accordion-two">
                                    <p>Donec elementum ligula eu sapien consequat eleifend. Donec nec dolor erat,
                                        condimentum sagittis sem. Praesent porttitor porttitor risus, dapibus rutrum ipsum
                                        gravida et. Integer lectus nisi, facilisis sit amet eleifend nec.
                                        <a href="#" target="_blank">Learn more.</a>
                                    </p>
                                </div>
                            </div>
                            <!-- Accordion 3  -->
                            <div class="ui-card shadow-sm ui-accordion">
                                <h6 class="toggle" data-toggle="accordion-three">3. Elit Sed Do Eiusmo?</h6>
                                <div class="body" data-accord="accordion-three">
                                    <p>Aliquam erat volutpat. Maecenas scelerisque, orci sit amet cursus tincidunt, libero
                                        nisl eleifend tortor, vitae cursus risus mauris vitae nisi. Cras laoreet ultrices
                                        ligula eget tempus.
                                        <a href="#" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                            <!-- Accordion 4  -->
                            <div class="ui-card shadow-sm ui-accordion">
                                <h6 class="toggle" data-toggle="accordion-four">4. Ea Commodo Consequat?</h6>
                                <div class="body" data-accord="accordion-four">
                                    <p>In hac habitasse platea dictumst. Pellentesque ornare blandit orci, eget tristique
                                        risus convallis ut. Vivamus a sapien neque. Morbi malesuada massa ac sapien luctus
                                        vulputate.
                                        <a href="#" target="_blank">Learn more.</a></p>
                                </div>
                            </div>

                        </div><!-- Accordion -->
                    </div>
                    <div class="col-md-6">
                        <img src="website/assets/img/mockups/applify-mockup-4.png" data-uhd="" alt="Applify - App Landing Page HTML Template" class="responsive-on-sm" data-max_width="500" style="max-width: 500px;">
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        </div>
    </div><!-- .main -->
@stop