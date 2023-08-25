<!doctype html>
<html lang="en">

<!-- Mirrored from Opectrade.com/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2023 21:01:19 GMT -->

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
			 <p>We'll love to hear from you</p>
			 <h1>Contact Us</h1>
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
			  <li class="active">Contact Us</li>
			</ul>
			</div>
		  </div>
		</div>
	  </div>
	  <section class=" padding-top contact ">
		<div class="container">
		  <div class="row">
			<div class="col-sm-6">
			   <div class="contact_detail padding-bottom">
				 <h3 class="bottom20">Contact us</h3>
				 <p class="bottom30">Want to work with us or need more details about our platform, you can fill the form below to get in touch with us. We have a team of seasoned customer care agents who are there round the clock to make sure we serve you at any point in time you need our attention</p>
				 <p class="bottom20">Our innovative pricing, pooled liquidity, and execution algorithm to seek the best price help remove the hassles of trading on a crypto Exchange. Our experts takes care of all the Works for you.</p>
				 <h3 class="bottom20">Our Contacts</h3>
				 <p>We made several channels available to make it quick and easy to get in touch with us at any given time. All of the channels are available on a 24/7 base</p>
				  <div class="row">
					<div class="col-sm-6">
					  <div class="address">
					  <span><i class="icon-mail"></i></span>
					  <div class="text">
						<h4>Email Address</h4>
						<p>support@Opectrade.com</p>
					  </div>
					 </div>
					</div>
					<div class="col-sm-6">
					  <div class="address">
					  <span><i class="icon-location"></i></span>
					  <div class="text">
						<h4>Address</h4>
						<p>430 Park Avenue
	  New York, NY 10022</p>
					  </div>
					  
					 </div>
					</div>
				  </div>
			   </div>
			</div>
			<div class="col-sm-6">
			  <h3 class="bottom20">Let’s Talk To Us</h3>
			  <form class="callus padding-bottom" method="POST" id="contact-form">
				  <div class="form-group">
					<label>Your Name *</label>
					<div class="input-group">
					  <input type="text" class="form-control" required="" name="fullname" id="fullname">
					  <span class="input-group-addon"><i class="fa fa-user"></i></span>
					</div>
				  </div>
				  <div class="form-group">
					<label>Email Addres *</label>
					<div class="input-group">
					  <input type="email" class="form-control" required="" name="email" id="email">
					  <span class="input-group-addon"><i class="icon-envelope2"></i></span>
					</div>
				  </div>
				  <div class="form-group">
					<label>Message *</label>
					<div class="input-group">
					  <textarea class="form-control" name="message" id="message"></textarea>
					  <span class="input-group-addon"><i class=" icon-comments"></i></span>
					</div>
				  </div>
				  <button type="submit" class="btn-green border_radius" id="btnContact">Send Message <i class='fa fa-rocket'></i></button>
			  </form>
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
			  <a href="mailto:support@Opectrade.com"><span class="__cf_email__">support@Opectrade.com</span></a>
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

<!-- Mirrored from Opectrade.com/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Feb 2023 21:01:23 GMT -->

</html>
