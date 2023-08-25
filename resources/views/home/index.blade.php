<!doctype html>
<html lang="en">

@include('include.home_css')

<body>
	<div id="notification-1" class="notification">     
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
	   </div>
	</div>
    <!--Loader -->
    <div class="loader">
        <div class="cssload-loader">
            <div class="cssload-inner cssload-one">
            </div>
            <div class="cssload-inner cssload-two">
            </div>
            <div class="cssload-inner cssload-three">
            </div>
        </div>
    </div>
	<!--Loader Ends -->

    <!--Header Starts-->
    @include('include.home_index_nav')
    <!--HEADER Ends-->


    <!--Slider Main-->
    <section class="rev_slider_wrapper">
        <div id="rev_slider" class="rev_slider top" data-version="5.0">
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade">
                    <!-- MAIN IMAGE -->
                    <img src=" {{ asset('assets/ui/images/home1-banner2.jpg') }} " alt="" data-bgposition="center center"
                        data-bgfit="cover">
                    <!-- LAYER NR. 1 -->
                    <h1 class="tp-caption  tp-resizeme uppercase" data-x="['left','left','left','center']"
                        data-hoffset="['0','15','15','15']" data-y="['290','190','190','100']"
                        data-voffset="['0','0','0','0']" data-responsive_offset="on" data-transform_idle="o:1;"
                        data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000">
                        Financial
                        <strong class="yellow_t">Growth
                        </strong>
                    </h1>
                    <div class="tp-caption  tp-resizeme" data-x="['left','left','left','center']"
                        data-hoffset="['0','15','15','15']" data-y="['360','260','260','200']"
                        data-voffset="['0','0','0','0']" data-responsive_offset="on" data-transform_idle="o:1;"
                        data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1300">
                        <p>We utilize market data to derive huge revenue in the cryptocurrency ecosystem
                        </p>
                    </div>
                    <div class="tp-caption  tp-resizeme" data-x="['left','left','left','center']"
                        data-hoffset="['0','15','15','15']" data-y="['410','310','290','180']"
                        data-voffset="['0','0','0','0']" data-responsive_offset="on" data-transform_idle="o:1;"
                        data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1600">
                        <a href="login" class="btn-border text-uppercase border_radius">Login
                        </a>
                        <a href="register" class="text-uppercase border_radius btn-yellow">Get started
                        </a>
                    </div>
                </li>
                <li data-transition="fade">
                    <img src="{{ asset('assets/ui/images/home3-banner3.jpg') }}" alt="" data-bgposition="center center"
                        data-bgfit="cover">
                    <h1 class="tp-caption  tp-resizeme uppercase" data-x="['left','left','left','center']"
                        data-hoffset="['0','15','15','15']" data-y="['290','190','190','100']"
                        data-voffset="['0','0','0','0']" data-responsive_offset="on" data-transform_idle="o:1;"
                        data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000">
                        Secured
                        <strong class="yellow_t">And Safe
                        </strong>
                    </h1>
                    <div class="tp-caption  tp-resizeme" data-x="['left','left','left','center']"
                        data-hoffset="['0','15','15','15']" data-y="['360','260','260','200']"
                        data-voffset="['0','0','0','0']" data-responsive_offset="on" data-transform_idle="o:1;"
                        data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1300">
                        <p>We offer the most secured crypto trading and investment solution on the globe
                        </p>
                    </div>
                    <div class="tp-caption  tp-resizeme" data-x="['left','left','left','center']"
                        data-hoffset="['0','15','15','15']" data-y="['410','310','290','180']"
                        data-voffset="['0','0','0','0']" data-responsive_offset="on" data-transform_idle="o:1;"
                        data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1600">
                        <a href="login" class="btn-border text-uppercase border_radius">Login
                        </a>
                        <a href="register" class="text-uppercase border_radius btn-yellow">Register
                        </a>
                    </div>
                </li>
            </ul>

        </div>
    </section>
    <!--SLIDERR Ends-->

    <!--Three columns text Info-->
    <section id="info" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-right wow fadeInDown" data-wow-delay="500ms">
                    <div id="google_translate_element" style=" max-width: 100%; "></div>
                </div>

                <div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms">
                    <h2 class="text-capitalize bottom10">Three Easy <span class="yellow_t">Steps</span></h2>
                    <p>Its fast and easy to get started with us in three simple steps</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="text_box text-center top40 wow fadeIn" data-wow-delay="700ms">
                        <span><i class="fa fa-user-plus"></i></span>
                        <h4 class="bottom10">Create An Account</h4>
                        <p>Simply click on the register button to create a free account for yourself. Its quick and
                            easy.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text_box text-center top40 wow fadeIn" data-wow-delay="900ms">
                        <span><i class="fa fa-gift"></i></span>
                        <h4 class="bottom10">Make Deposit</h4>
                        <p>Pick a plan of your choice from our investment plans. Make a deposit to your personal wallet.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text_box  text-center top40 wow fadeIn" data-wow-delay="1100ms">
                        <span><i class="icon-bargraph"></i></span>
                        <h4 class="bottom10">Financial Growth</h4>
                        <p>Watch your daily earnings live. Be ready to place a withdrawal as soon as your investment is
                            completed.</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4">
                    <div class="text_box text-center top40 wow fadeIn" data-wow-delay="700ms">
                        <span><i class="fa fa-money"></i></span>
                        <h4 class="bottom10">Total Deposit</h4>
                        <h5>$1B</h5>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text_box text-center top40 wow fadeIn" data-wow-delay="900ms">
                        <span><i class="fa fa-history"></i></span>
                        <h4 class="bottom10">Proceeded Transactions</h4>
                        <h5>$525M</h5>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="text_box  text-center top40 wow fadeIn" data-wow-delay="1100ms">
                        <span><i class="fa fa-usd"></i></span>
                        <h4 class="bottom10">Total Withdrawal</h4>
                        <h5>$1.84B</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Info Text ends-->


    <!--Good Plan-->
    <section id="plans" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 content_left">
                    <figure>
                        <img src="{{ asset('assets/ui/images/good-plans.jpg') }}" alt="Good Plans" class="img-responsive">
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 content_right shadow  margin-bottom">
                    <div id="plan_slider" class="owl-carousel">
                        <div class="item">
                            <span class="count bottom20 blue_bg">1</span>
                            <h2 class="bottom10 text-black">SAFE AND SECURE</h2>
                            <p class="bottom20">Trade with 100% peace of mind as we have the best system security team
                                onboard.</p>
                            <a href="about" class="btn-border text-uppercase border_radius">Read More</a>
                        </div>
                        <div class="item">
                            <span class="count bottom20 blue_bg">2</span>
                            <h2 class="bottom10 text-black">INSTANT TRADING</h2>
                            <p class="bottom20">With our lightning speed servers, you are sure to get the best out of
                                your investments.</p>
                            <a href="about" class="btn-border text-uppercase border_radius">Read More</a>
                        </div>
                        <div class="item">
                            <span class="count bottom20 blue_bg">3</span>
                            <h2 class="bottom10 text-black">PROGRESSIVE REVENUE</h2>
                            <p class="bottom20">Watch your accruals grow in real time and monitor how much revenue is
                                being generated from your investment.</p>
                            <a href="about" class="btn-border text-uppercase border_radius">Read More</a>
                        </div>
                        <div class="item">
                            <span class="count bottom20 blue_bg">4</span>
                            <h2 class="bottom10 text-black">COVERED BY INSURANCE</h2>
                            <p class="bottom20">You have zero chances of losing your investments as all our assets are
                                duly covered by inssurance.</p>
                            <a href="about" class="btn-border text-uppercase border_radius">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--GOOD PLANS-->



    <!--Facts Counter & Grid-->
    <section id="facts" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="wow fadeInDown" data-wow-delay="500ms">
                        <h2 class="bottom10 text-capitalize">We’ll help you to grow <span class="yellow_t">your
                                money</span></h2>
                        <p class="tagline heading_space">Opectrade innovative trading platforms and tools
                            provide the power and reliability you need to feel more confident in your trading.
                        </p>
                    </div>
                    <div class="number-counters">
                        <div class="counters-item heading_space wow fadeIn" data-wow-delay="700ms">
                            <p class="data"><strong data-to="6">0</strong></p>
                            <!-- Set Your Number here. i,e. data-to="56" -->
                            <p>Years of Experience</p>
                        </div>
                        <div class="counters-item heading_space wow fadeIn" data-wow-delay="900ms">
                            <p class="data"><strong data-to="875">0</strong><sub>k</sub></p>
                            <p>Happy Clients</p>
                        </div>
                        <div class="counters-item heading_space wow fadeIn" data-wow-delay="1100ms">
                            <p class="data"><strong data-to="100">0</strong><sub>%</sub></p>
                            <p>Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="grid_layout" class="cbp cbp-l-grid-mosaic-flat">
                <div class="cbp-item">
                    <a href="../www.pacificfxoption.com/images/grid1.jpg" class="cbp-lightbox">
                        <img src="{{ asset('assets/ui/images/grid1.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay_inner">
                                <h4>Opectrade</h4>
                                <p>Number 1 investment platform</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item">
                    <a href="../www.pacificfxoption.com/images/grid3.jpg" class="cbp-lightbox">
                        <img src="{{ ('assets/ui/images/grid3.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay_inner">
                                <h4>Opectrade</h4>
                                <p>Number 1 investment platform</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item">
                    <a href="../www.pacificfxoption.com/images/grid2.jpg" class="cbp-lightbox">
                        <img src="{{ asset('assets/ui/images/grid2.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay_inner">
                                <h4>Opectrade</h4>
                                <p>Number 1 investment platform</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item">
                    <a href="../www.pacificfxoption.com/images/grid4.jpg" class="cbp-lightbox">
                        <img src="{{ asset('assets/ui/images/security.jpg') }}" alt="" style="width: 269px; height: 180px;">
                        <div class="overlay">
                            <div class="overlay_inner">
                                <h4>Opectrade</h4>
                                <p>Number 1 investment platform</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item">
                    <a href="../www.pacificfxoption.com/images/grid5.jpg" class="cbp-lightbox">
                        <img src="{{ ('assets/ui/images/grid5.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="overlay_inner">
                                <h4>Opectrade</h4>
                                <p>Number 1 investment platform</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Facts & Fun ends-->

    <!--Video-->
    <section id="bg-video" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 video wow fadeInLeft" data-wow-delay="500ms">
                    <img src="{{ ('assets/ui/images/video-img.jpg') }}" alt="video">

                </div>
                <div class="col-sm-6 right_content bottom40 wow fadeInRight" data-wow-delay="500ms">
                    <h2 class="bottom30 text-capitalize">About <span class="yellow_t">Opectrade</span></h2>
                    <p class="bottom30">Opectrade International Trading and Investment Corporate Company
                        Limited is a very experienced and promising organization in the field of trustee administration
                        and long-haul ventures. The joining of distinctive systems and techniques add to income, gainful
                        collaboration, and organized advancement. The most created territory of Opectrade
                        International Trading and Investment Corporate Company Limited movement is multicurrency trading
                        on the Forex market.
                    </p>
                    <p class="bottom30">It was established by a group of professional traders and investors, who have
                        fore seen the future of International Capital Market</p>
                    <p class="bottom30">Since 2013, we offer the best conditions for financial specialists from Great
                        England and will be prepared to see you among them. Various organization workers are proficient
                        money related investigators and experienced specialists in remote trade trading and hypothesis
                        with securities and shares of various UK organizations. They have all the information and
                        abilities that are important to be required in beneficial trade and expand the benefit with
                        sensible risk</p>
                    <a href="about" class="btn-white text-uppercase border_radius">More About us</a>
                </div>
            </div>
        </div>
    </section>
    <!--Video Ends-->




    <section id="info" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInDown">
                    <h2 class="text-capitalize bottom10">Investment <span class="yellow_t">Plan</span></h2>
                    <p class="heading_space">With our investment Plans, you have alot of ways to earn and profit by the
                        day.</p>
                </div>
            </div>
            <div class="row info">
                <div class="col-sm-4 icon_box text-center first wow fadeIn" data-wow-delay="500ms">
                    <i class="icon-lock bottom20"></i>
                    <h4 class="bottom10">SILVER PLAN</h4>
                    <p>
                        invest $3,000,00 and earn $15,000.00 <br>
                        invest $4,000.00 and earn $20,000.00 <br>
                        invest $5,000.00 and earn $25,000.00 <br>
                        invest $6,000.00 and earn $30,000.00 <br>
                        <br><br>
                        <a href="register" class="text-uppercase border_radius btn-yellow">Get Started
                        </a>
                    </p>
                </div>
                <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="600ms">
                    <i class="fa fa-bolt bottom20"></i>
                    <h4 class="bottom10">VIP PLAN</h4>
                    <p>VIP plans and possible earnings in two months available

                        invest $10,000.00 and earn $45,000.00 <br>
                        invest $20,000,00 and earn $65,000.00 <br>
                        invest $30,000.00 and earn $75,000.00 <br>
                        ✔️✔️
                        Profit will Recieve
                        within 5 business days. <br> <br>

                        <br><br>
                        <a href="register" class="text-uppercase border_radius btn-yellow">Get Started
                        </a>



                    </p>
                </div>
                <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="700ms">
                    <i class="icon-layers bottom20"></i>
                    <h4 class="bottom10">VVIP PLAN</h4>
                    <p>Special investment plans in six months only available for investors over 5 years with us are
                        eligible to invest in this plans.

                        $70,000.00 and earn $180,000.00 <br>
                        $100,000.00 and earn $250,000.00 <br>
                        <br>
                        <br>
                        ✔️✔️
                        <br><br>
                        <a href="register" class="text-uppercase border_radius btn-yellow">Get Started
                        </a> <br>

                    </p>
                </div>



                <div class="col-sm-4 icon_box text-center first wow fadeIn" data-wow-delay="800ms">
                    <i class="fa fa-users bottom20"></i>
                    <h4 class="bottom10">DIAMOND</h4>

                    <p>Opectrade investment DIAMOND investment plans.
                        Profit will receive within 30 minutes.
                        <br><br>
                        $150,000.00 And earn $350,000.00 <br>

                        <a href="register" class="text-uppercase border_radius btn-yellow">Get Started
                        </a>
                    </p>
                </div>

                <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="900ms">
                    <i class="fa fa-shield bottom20"></i>
                    <h4 class="bottom10">DIAMOND+</h4>
                    <p>Opectrade investment DIAMOND investment plans.
                        Profit will receive within 30 minutes.
                        <br><br>
                        $250,000.00 And earn $550,000.00 <br>
                        <br>
                        <br>
                        <a href="register" class="text-uppercase border_radius btn-yellow">Get Started
                        </a>
                    </p>
                </div>
                <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="1000ms">
                    <i class="fa fa-bitcoin bottom20"></i>
                    <h4 class="bottom10">DIAMOND++</h4>
                    <p>Opectrade investment DIAMOND investment plans.
                        Profit will receive within 30 minutes.
                        <br><br>
                        $300,000.00 And earn $1,000,000.00 <br>
                        <a href="register" class="text-uppercase border_radius btn-yellow">Get Started
                        </a>
                    </p>
                </div>


            </div>
        </div>
    </section>





    <section id="info" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInDown">
                    <h2 class="text-capitalize bottom10">Why <span class="yellow_t">Chose us</span></h2>
                    <p class="heading_space">With our innovative traders, you have many more reasons to chose us.</p>
                </div>
            </div>
            <div class="row info">
                <div class="col-sm-4 icon_box text-center first wow fadeIn" data-wow-delay="500ms">
                    <i class="icon-lock bottom20"></i>
                    <h4 class="bottom10">SAFE AND SECURE</h4>
                    <p>Trade with 100% peace of mind as we have the best system security team onboard.</p>
                </div>
                <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="600ms">
                    <i class="fa fa-bolt bottom20"></i>
                    <h4 class="bottom10">INSTANT TRADING</h4>
                    <p>With our lightning speed servers, you are sure to get the best out of your investments.</p>
                </div>
                <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="700ms">
                    <i class="icon-layers bottom20"></i>
                    <h4 class="bottom10">PROGRESSIVE REVENUE</h4>
                    <p>Watch your accruals grow in real time and monitor how much revenue is being generated for you..
                    </p>
                </div>
                <div class="col-sm-4 icon_box text-center first wow fadeIn" data-wow-delay="800ms">
                    <i class="fa fa-users bottom20"></i>
                    <h4 class="bottom10">INVESTMENT FOR ALL</h4>
                    <p>With different packages, Our system is modelled to accommodate everyone no matter how much you
                        have to invest.</p>
                </div>
                <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="900ms">
                    <i class="fa fa-shield bottom20"></i>
                    <h4 class="bottom10">COVERED BY INSURANCE</h4>
                    <p>You have zero chances of losing your investments as all our assets are duly covered by
                        inssurance..</p>
                </div>
                <div class="col-sm-4 icon_box text-center wow fadeIn" data-wow-delay="1000ms">
                    <i class="fa fa-bitcoin bottom20"></i>
                    <h4 class="bottom10">BITCOIN TRANSACTION</h4>
                    <p>Invest in the world's most popular cryptocurrency and enjoy all the benefits that come with it..
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--People Saying-->
    <section id="people" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms">
                    <h2 class="bottom10 text-capitalize">What people are <span class="yellow_t">Saying</span></h2>
                    <p class="heading_space">We are trusted by thousands of users across the globe.</p>
                </div>
            </div>
            <div id="people_slider" class="owl-carousel">

                <div class="item">
                    <div class="people_wrap border_radius right">
                        <i class="icon-quotes-right"></i>
                        <p>Am Allen from North Carolina, Currently living in Arizona with my Family, i came across
                            pacificfxoption while browsing through facebook,
                            I accessed the site and contact them via whatsapp and i started investing with $5000 and am
                            making $51,560.00 Weekly.</p>
                    </div>
                    <div class="testinomial_pic text-right pull-right">
                        <div class="pic"><img alt="testinomial"
                                src="uploads/testimonies/thumb/998bbc715738adbee6391aa77185ed78.jpg"
                                style="width: 58px;"></div>
                        <div class="testinomial_body">
                            <span class="name text-white">- Allen Brewer</span>
                            <span class="post_img">Verified Client</span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="people_wrap border_radius right">
                        <i class="icon-quotes-right"></i>
                        <p>I want to say a big thank you to Opectrade. Just got my profit of $7500 in my Bank
                            account. This is indeed a trust worthy platform to invest</p>
                    </div>
                    <div class="testinomial_pic text-right pull-right">
                        <div class="pic"><img alt="testinomial"
                                src="uploads/testimonies/thumb/47cbbfcf351a84a2c74ba853146d9713.jpg"
                                style="width: 58px;"></div>
                        <div class="testinomial_body">
                            <span class="name text-white">- Carly Jones</span>
                            <span class="post_img">Verified Client</span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="people_wrap border_radius right">
                        <i class="icon-quotes-right"></i>
                        <p>It's really wonderful. I would also like to say thank you to all your staff.
                            Opectrade did exactly what you said it does.</p>
                    </div>
                    <div class="testinomial_pic text-right pull-right">
                        <div class="pic"><img alt="testinomial"
                                src="uploads/testimonies/thumb/20aab71f88a53b30534b49407b1e61b4.jpg"
                                style="width: 58px;"></div>
                        <div class="testinomial_body">
                            <span class="name text-white">- Carilyn E</span>
                            <span class="post_img">Verified Client</span>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="people_wrap border_radius right">
                        <i class="icon-quotes-right"></i>
                        <p>I'm really happy i took the chance to invest with pacificfxoption. I'm $17,600 richer today
                        </p>
                    </div>
                    <div class="testinomial_pic text-right pull-right">
                        <div class="pic"><img alt="testinomial"
                                src="uploads/testimonies/thumb/689098d009df1575c9e35c237e701927.jpg"
                                style="width: 58px;"></div>
                        <div class="testinomial_body">
                            <span class="name text-white">- Jabal husseini </span>
                            <span class="post_img">Verified Client</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--People Saying ends-->

    <!--News & Thoughts-->
    <section id="plan" class="padding layout_third">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms">
                    <h2 class="bottom10 text-capitalize">What We <span class="yellow_t">Offer </span></h2>
                    <p class="heading_space">We’re building a new standard for crypto trading. One account, one
                        balance, streamlined access to multiple liquidity venues.</p>
                </div>
            </div>
            <div class="row">
                <div id="news_slider" class="owl-carousel">
                    <div class="item">
                        <div class="news">
                            <div class="image"><img src="assets/ui/images/news3.jpg" alt="News"></div>
                            <div class="news_text">
                                <h4 class="bottom10"><a href="#">Trading</a></h4>
                                <p class="bottom30">Our goal is to provide one of the deepest and widest liquidity
                                    pools in the crypto market. We strive to accomplish this by aggregating liquidity
                                    from multiple connected venues like exchanges.</p>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="image"><img src="assets/ui/images/news2.jpg" alt="News"></div>
                            <div class="news_text">
                                <h4 class="bottom10"><a href="#">Investment</a></h4>
                                <p class="bottom30">For the crypto assets in your account, we use Opectrade
                                    custodial services and applications. Opectrade is trusted by institutions in
                                    the digital assets industry for security, compliance and custodial solutions.</p>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="image"><img src="assets/ui/images/cryptoexchange.jpg" alt="News"
                                    style="width: 360px; height: 210px;"></div>
                            <div class="news_text">
                                <h4 class="bottom10"><a href="#">Exchange</a></h4>
                                <p class="bottom30">We also buy bitcoins from our investors. We provide several payment
                                    methods to enable you quickly convert your cash to coin without any hassle. </p>

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="news">
                            <div class="image"><img src="assets/ui/images/news1.jpg" alt="News"
                                    style="width: 360px; height: 210px;"></div>
                            <div class="news_text">
                                <h4 class="bottom10"><a href="#">Loan</a></h4>
                                <p class="bottom30">Our aim is to simplify access to the crypto markets by letting our
                                    brokerage customers use the buying power from a single account to access liquidity
                                    from all of our connected venues.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News & Thoughts ends-->
{{-- 
    <section style="background-color: #2E2E30;">
        <div class="container">
            <div class="row step-list">
                <div class="col-md-6 step-list__item">
                    <h3>LATEST DEPOSIT</h3>
                    <div class="step-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Gateway</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Time</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody class="depositors">
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 step-list__item">
                    <h3>LATEST WITHDRAWAL</h3>
                    <div class="step-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Gateway</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Time</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody class="depositorsL"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--Partners-->
    <section id="partner" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInDown" data-wow-delay="500ms">
                    <h2 class="bottom10 text-capitalize">Be Our <span class="yellow_t">Partners</span></h2>
                    <p class="heading_space">Are you passionate about working with us? We are glad to let you know that
                        we will always welcome you with an open arm ready to work with you in the best way</p>
                </div>
            </div>

        </div>
    </section>
    <!--Partner Ends-->

    <!--Contact Info-->
    <div class="container bg_contact bg_two border_radius wow bounceInUp" data-wow-delay="500ms">
        <div class="row ">
            <div class="col-sm-6">
                <div class="contact_inner">
                    <i class="icon-phone4"></i>
                    <h5><strong>+19192058540</strong></h5>
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

<!-- Mirrored from Opectrade.com/index by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2023 21:00:06 GMT -->

</html>
