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


    <section class="page_header" style="background-position: 50% -44px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>Our Terms</p>
                    <h1 class="text-uppercase">Terms & Conditions</h1>
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
                        <li class="active">Terms & Conditions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section id="team" class="pricesection padding-top padding-bottom-half light">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInDown animated" data-wow-delay="500ms"
                    style="visibility: visible; animation-delay: 500ms; animation-name: fadeInDown; margin-bottom: 20px;">
                    <h2 class="bottom10 text-capitalize">Terms And <span class="blue_t">Conditions</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="paragraph-body">The Opectrade website/platform is available in English Language.
                        The English version is the original version and the only one binding on Opectrade; it
                        shall prevail on any other version in case of discrepancy. Opectrade is not responsible
                        for any erroneous, inadequate, or misleading translations from the original version into other
                        languages unless communicated to users.</p>
                    <p class="paragraph-body">
                        Opectrade allows access to its webpage and users related services by any individual or
                        corporate entity (herein after referred to as the Investor/Client) according to the procedure
                        and on the terms and conditions described in this Agreement.</p>
                    <p class="paragraph-body">
                        The Agreement becomes effective as of the date the Investor opened an investment account and
                        transferred funds to the Company’s account(s) to ensure minimum investment deposit.</p>

                    <p class="paragraph-body">In the Agreement any reference to an individual person includes corporate
                        entities, unincorporated associations, partnerships and individuals.Headings and notes in the
                        Agreement are for reference only and shall not affect the contents and interpretation of the
                        Agreement.</p>


                    <h3 style="margin: 35px 0;">INVESTOR AGREES THAT:</h3>

                    <ul style="list-style-type: disc;">
                        <li class="list-item">Any actions/error committed by an investor which destabilize the Company’s
                            business or performance of the Company’s services, equipment, or software may result in the
                            Company’s refusal (on the basis of private law) of servicing the Investor’s current
                            investment/trading account and cancellation of all investment orders, with full refund of
                            the remaining deposit. Opectrade would notify the Investor about the reasons for the
                            above decision. Opectrade also may reject such Investor’s new registration in the
                            future.
                        </li>

                        <li class="list-item">Individuals below the age of 18 are not allowed to participate in
                            financial trading, therefore can not use the services of Opectrade. Information
                            provided to the Opectrade are true and correct.
                        </li>

                        <li class="list-item">He or she shall notify Opectrade about any changes on information
                            uploaded. The e-mail address submitted is not used by anyone. Any and all notices, requests,
                            complaints, and information received from this address are considered as sent by the
                            Investor.
                        </li>

                        <li class="list-item">Company may request from Investor a confirmation of accuracy of the
                            personal account data for a due diligence and in the event of a withdrawal request. Company
                            may request an authorized copy of the Investor’s ID and the document proving his place of
                            residence. Inability to provide requested documents may result in the Company’s refusal (on
                            the basis of private law) of servicing the investor’s current needs and cancellation of all
                            trading orders, with full refund of the remaining deposit. Opectrade must notify the
                            Investor about the reasons for the above decision
                        </li>

                        <li class="list-item">In case of double registration of the same Client, Opectrade has
                            the right to cancel duplicated registrations, cancel opened positions and withdrawal
                            requests. All duplicated accounts will be frozen for investigation purposes.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Info-->
    <div class="container bg_contact bg_two border_radius wow bounceInUp" data-wow-delay="500ms">
        <div class="row ">
            <div class="col-sm-6">
                <div class="contact_inner">
                    <i class="icon-phone4"></i>
                    <h5><strong>{{ config('app.phone') }}</strong></h5>
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
