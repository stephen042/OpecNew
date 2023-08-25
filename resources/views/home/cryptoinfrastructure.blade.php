<!doctype html>
<html class="no-js" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

{{-- start head --}}
@include('include.home_css')
{{-- end start head --}}

<body>

@include('include.home_nav')

<script>
$(".navbar-toggler").click( function(){
	$("#mySidebar").toggle({ direction: "left" }, 1000);
	$("#closeMenu").fadeToggle();
});
$("#closeMenu").click( function(){
	$("#mySidebar").toggle({ direction: "left" }, 1000);
  $("#closeMenu").fadeToggle();
});
</script>
<div class="hero-cover" style="background-image: url(assets/images/sb_d.jpg); color: #fff">
	<div class="container">
		<div class="hero-cover-container">
			<h1>Crypto-Infrastructure</h1>
			<p>We develop the most innovative blockchain hardware solutions to securely move assets across the Bitcoin Blockchain.</p>
		</div>
	</div>
</div>
<section class="py-5 preview-slider" id="tardisk">
	<div class="container">
		<div class="row px-md-5 my-5">
			<div class="col-md-6 pt-md-4">
				<h2>BlockCypherMinings TardisBlockCypherMinings Tardis</h2>
				<p>The BlockCypherMinings Tardis server is an efficient bitcoin mining server designed for small, medium and enterprise-grade investors.</p>
			</div>
			<div class="col-md-6 px-5">
				<img src="{{ asset('assets/images/tardis_pic.png') }}">
			</div>
		</div>
	</div>
</section>
<section class="bg-light py-5 preview-slider" id="blockbox">
	<div class="container">
		<div class="row px-md-5 my-5">
			<div class="col-md-6 px-5">
				<img src="{{ asset('assets/images/box_2_grey.jpg') }}">
			</div>
			<div class="col-md-6 pt-md-4">
				<h2>BlockBox AC</h2>
				<p>The BlockCypherMinings Group’s BlockBox AC is one of the most powerful bitcoin mining devices available on the market today.</p>
			</div>
		</div>
	</div>
</section>
<section class="py-5 preview-slider" id="data">
	<div class="container">
		<div class="row px-md-5 my-5">
			<div class="col-md-6 pt-md-4">
				<h2>Data centers</h2>
				<p>We are committed to ensuring security and stability on the bitcoin blockchain through our state-of-the-art data centers.</p>
			</div>
			<div class="col-md-6">
				<img src="{{ asset('assets/images/datacenters_small.png') }}">
			</div>
		</div>
	</div>
</section>
<div class="border-top">
	<div class="container">
		<div class="row">
			<div class="col-md-8 py-4">
				<h2 class="m-0 abel">Want to learn more about our crypto-infrastructure solutions?</h2>
			</div>
			<div class="col-md-4 text-md-right py-4">
				<a href="contact" class="btn btn-outline-primary btn-lg">Contact us</a>
			</div>
		</div>
	</div>
</div>

{{-- footer --}}
@include('include.home_footer')
{{--End footer --}}

{{-- script --}}
@include('include.home_script')
{{-- End script --}}

</body>

<!-- Mirrored from blockcypherminings.com/crypto-infrastructure by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 12:08:39 GMT -->
</html>