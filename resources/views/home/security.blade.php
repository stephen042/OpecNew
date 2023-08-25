<!doctype html>
<html lang="en">


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
                    <p>Opectrade</p>
                    <h1>Account Platform &amp; Security</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="page_linker">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="icon-home6"></i>Home</a></li>
                        <li class="active">Security</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class=" padding-top contact ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact_detail padding-bottom">
                        <h3 class="bottom20">Good security is hard work. We're working hard to protect you.</h3>
                        <h3 class="bottom20"></h3>
                        <p class="bottom30">
                            tastyworks handles the Security of your Account and your Personal Information very
                            seriously. We consider Security from top to bottom within our organization, and design and
                            deploy a myriad of Defensive System Configurations, Security Devices, Sentinels and
                            Real-time Monitoring systems to protect access and privacy surrounding your Account.
                            <br>
                            <br>
                            As a rule, we encrypt as much of the data and interactions with you as possible, which means
                            encrypting the data at rest, in use and in transit. We employ industry recognized and
                            adopted high standards in encryption protocols to protect the data that flows between you
                            and our systems (TLS v1.2 256-bit). Your connection to our servers are signed with SSL
                            Certificates issued from well-known and trusted authorities to ensure that you can trust
                            that you are communicating with us and not some imposter.
                            <br>
                            <br>
                            To protect your identity and access to your Account we hash your passwords and other
                            important security credentials to make it very difficult to determine what they are, even if
                            someone has direct access to the raw information.
                        </p>
                        <h3 class="bottom20">Ever Vigilant</h3>
                        <p class="bottom20">
                            tastyworks regularly reviews, assesses, audits and fortifies our systems and code. We engage
                            professional security consultants to identify and assess security vulnerabilities,
                            proactively test our defensive measures, and independently review our systems.
                            <br>
                            <br>
                            We monitor employee access to data, run background checks, segregate internal business units
                            and their access to information as necessary. We control access to our Networks with very
                            stringent policies and controls.
                        </p>
                        <h3 class="bottom20">Good Security Requires Your Help, Too</h3>
                        <p class="bottom20">
                            We do our part to protect you and your Account, but you can help protect yourself with the
                            following practices:
                            <br>
                            <br>
                            Choose a strong password. Part of a good strategy for security is to choose Strong
                            Passwords, and more importantly ones that are not shared with other accounts at other
                            organizations. This way, a compromise at another company will not inadvertently give away
                            your credentials here at tastyworks. For a list of bad passwords, take a look at this list:

                        </p>
                        <h3 class="bottom20" style="color: red;">1000 Worst Passwords</h3>
                        <p class="bottom20">
                            Monitor your account activity. Make sure you are aware of any changes or activity in your
                            account, and if you see anything which you can’t explain, please notify us immediately. We
                            will normally try to notify you using emails, sms messages or push notifications for certain
                            changes in your account, but there may be some instances where you may notice something
                            wrong before receiving a notification from us.
                        </p>

                    </div>
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
