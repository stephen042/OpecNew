<!doctype html>
<html lang="en">

<!-- Mirrored from Opectrade.com/about by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2023 21:01:19 GMT -->

@include('include.home_css')

<body>
    {{-- <div id="notification-1" class="notification">
        <div class="notification-block">
            <div class="notification-img">
                <!-- Your image or icon -->
                <i class="fa fa-btc" aria-hidden="true"></i>
                <!-- / Your image or icon -->
            </div>
            <div class="notification-text-block">
                <div class="notification-title">
                    <!-- Notification Title -->
                    Earning
                    <!-- / Notification Title -->
                </div>
                <div class="notification-text"></div>
            </div>
        </div>
    </div> --}}
    <!--Loader-->
    <div class="loader">
        <div class="cssload-loader">
            <div class="cssload-inner cssload-one">
            </div>
            <div class="cssload-inner cssload-two">
            </div>
            <div class="cssload-inner cssload-three">
            </div>
        </div>
    </div><!--Loader Ends -->

    <!--Header Starts-->
    @include('include.home_nav')
    <!--HEADER Ends-->

    <section class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>Who We Are</p>
                    <h1 class="text-uppercase"> About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="page_linker">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="icon-home6"></i>Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--About Us-->
    <section id="about" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 padding-bottom">
                    <img src="{{ ('assets/ui/images/about.jpg') }}" alt="About Us" class="img-responsive">

                </div>
                <div class="col-sm-6 about_right padding-bottom">
                    <h2 class="bottom10">More About<span class="blue_t"> us</span></h2>
                    <p><strong>Opectrade innovative platforms and tools provide the power and reliability you
                            need to feel more confident in your investment, trading and loan access.</strong></p>
                    <p class="bottom30">Opectrade is an International Trading and Investment company, officially
                        registered in the United States, it was launched in October 2016. The company has direct
                        contracts with professional traders and miners around the world that guarantees the best
                        services and ensures profits are made and remitted to investors daily.</p>
                    <p class="bottom30">It was established by a group of professional traders and investors, who have
                        fore seen the future of crytpo currency.</p>
                    <p class="bottom30">Opectrade is founded on the principle that cryptocurrencies is changing
                        the fundamental structure of not only our economy and banking systems but also the way we
                        connect and engage as human beings.</p>
                    <p class="bottom30">Our desktop, web, and mobile platforms put powerful tools into the hands of
                        traders and investors – helping to level the playing field in the competitive world of trading
                        and investing. With more than 30 years of industry experience, we have the tools and support you
                        need.</p>
                    <div class="number-counters text-center">
                        <div class="counters-item top15">
                            <p class="data"><strong data-to="6">0</strong></p>
                            <p>Years of Experience</p>
                        </div>
                        <div class="counters-item top15">
                            <p class="data"><strong data-to="875">0</strong><sub>k</sub></p>
                            <p>Happy Clients</p>
                        </div>
                        <div class="counters-item top15">
                            <p class="data"><strong data-to="100">0</strong><sub>%</sub></p>
                            <p>Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Quality Fine-->
    <section id="quality" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Security Comes First</h2>
                    <p class="heading_space">Your security and trust are important to us. We're committed to protecting
                        your account with the highest standards of security available..</p>
                </div>
                <div class="clearfix"></div>
                <div class="quality_wrap clearfix">
                    <div class="col-md-6">
                        <div class="left"> <img src="{{ asset('assets/ui/images/quality.jpg') }}" alt="quality"> </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            <div class="media">
                                <div class="media-left">
                                    <div class="media-object"><span>1</span></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="bottom10">We Are Trusted</h4>
                                    <p class="bottom15">Over $55B and counting - More than 175,000 people trust over
                                        $55 billion with PacificFxOption companies.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <div class="media-object"><span>2</span></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="bottom10">Strong Encryption</h4>
                                    <p class="bottom15">Everything is encrypted - We use state-of-the-art data
                                        encryption when handling your financial information.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <div class="media-object"><span>3</span></div>
                                </div>
                                <div class="media-body">
                                    <h4 class="bottom10">Powerful backing</h4>
                                    <p>Powerful backing - Opectrade is backed by $1B in investment from some of
                                        the world's largest financial institutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Quality fine ends-->


    <!--What We DO-->
    <section id="wedo" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>What We<span class="blue_t"> Do</span></h2>
                    <p class="heading_space">We’re building a new standard for crypto trading. One account, one
                        balance, streamlined access to multiple liquidity venues..</p>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-6">
                    <div class="accordion-container bottom40">
                        <div class="accordion_title"> <a href="javascript:void(0)" class="active">Investment<i
                                    class="fa fa-plus"></i></a>
                            <div class="content" style="display:block;">
                                <p class="bottom20">Opectrade redefines the way we live; from "being smart" to
                                    "being wise". Our vision is to build a strong alliance and lasting partnership with
                                    our investors. A platform connecting individuals to create a community based on
                                    technology.</p>
                                <p class="bottom0">Opectrade as an investment project does not operate like the
                                    banking system nor HYIP. Funds deposited are allocated to different sectors of the
                                    company's Investment strategy.</p>
                            </div>
                        </div>
                        <div class="accordion_title"> <a href="javascript:void(0)">Trading<i
                                    class="fa fa-plus"></i></a>
                            <div class="content">
                                <ul class="check">
                                    <li><i class="icon-check"></i>Investors receive their earnings daily.</li>
                                    <li><i class="icon-check"></i>Withdrawals are made at intervals and you have the
                                        option to reinvest after the completion of your trading cycle..</li>
                                    <li><i class="icon-check"></i>We also offer consultancy on Trading strategy.</li>
                                    <li><i class="icon-check"></i>4.5% For $100,000 and above.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="do_media media bottom40">
                        <div class="media-left"> <a href="about#"> <img class="media-object"
                                    src="{{ asset('assets/ui/images/about1.jpg') }}" alt="What We Do"> </a> </div>
                        <div class="media-body">
                            <h4 class="bottom10">Always Available</h4>
                            <p class="heading_space">Our desktop, web, and mobile platforms put powerful tools into the
                                hands of traders and investors – helping to level the playing field in the competitive
                                world of trading and investing.</p>

                            <ul class="check">
                                <li><i class="fa fa-check-square-o"></i> Utilize real-time market data and order
                                    execution technology.</li>
                                <li><i class="fa fa-check-square-o"></i> Access multiple Investment classes, including
                                    Crypto, Stocks and Options.</li>
                                <li><i class="fa fa-check-square-o"></i> Our trading systems have a 99.999% uptime
                                    accuracy.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--We Do ends-->
    <!--Contact Info-->
    <div class="container bg_contact bg_two border_radius wow bounceInUp" data-wow-delay="500ms">
        <div class="row ">
            <div class="col-sm-6">
                <div class="contact_inner">
                    <i class="icon-phone4"></i>
                    <h5><strong>+14244652942</strong></h5>
                    <a href="mailto:support@Opectrade.com"><span
                            class="__cf_email__">support@Opectrade.com</span></a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact_inner">
                    <i class="icon-icons20"></i>
                    <h5><strong>Mon - Sun 8.00 - 20.00</strong></h5>
                    <h5>Sunday Closed</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact_inner">
                    <i class="icon-location"></i>
                    <h5><strong>430 Park Avenue
                            New York, NY 10022</strong></h5>
                </div>
            </div>
        </div>
    </div>


    {{-- start footer --}}
    @include('include.home_footer')
    {{-- end footer --}}

    {{-- start script --}}
    @include('include.home_script')
    {{-- end script --}}

</body>

<!-- Mirrored from Opectrade.com/about by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2023 21:01:23 GMT -->

</html>
