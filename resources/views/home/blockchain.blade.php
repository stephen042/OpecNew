<!doctype html>
<html class="no-js" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

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
<div class="hero-cover bg-primary text-light">
	<div class="container">
		<div class="hero-cover-container">
			<h1>Blockchain</h1>
			<p>The world is rapidly changing, and we are on the front lines of the blockchain’s groundbreaking technical evolution.</p>
		</div>
	</div>
</div>
<section class="bg-light py-5 preview-slider" id="exonum">
	<div class="container">
		<div class="row px-md-5 my-5">
			<div class="col-md-6 p-5">
				<img src="{{ asset('assets/images/exonum_1116x928.svg') }}">
			</div>
			<div class="col-md-6 pt-md-4">
				<h2>Exonum</h2>
				<p>Exonum Enterprise is BlockCypherMinings’s premier blockchain-as-a-service solution, designed to help governments and companies integrate blockchain into their operations.</p>
			</div>
		</div>
	</div>
</section>
<section class="py-5 preview-slider" id="crystal">
	<div class="container">
		<div class="row px-md-5 my-5">
			<div class="col-md-6 pt-md-4">
				<h2>Crystal</h2>
				<p>Crystal is a web-based software tool that helps financial institutions and law enforcement manage blockchain investigations. </p>
			</div>
			<div class="col-md-6 p-5">
				<img src="{{ asset('assets/images/crystal_1116x928.svg') }}">
			</div>
		</div>
	</div>
</section>
<section class="bg-light py-5 preview-slider" id="surround">
	<div class="container">
		<div class="row px-md-5 my-5">
			<div class="col-md-6 p-5">
				<img src="{{ asset('assets/images/surround_1116x928-1.png') }}">
			</div>
			<div class="col-md-6 pt-md-4">
				<h2>Surround</h2>
				<p>Surround is BlockCypherMinings’s music entertainment division that is working to improve the music industry through blockchain technology. </p>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-md-8 py-4">
			<h2 class="m-0 abel">Want to learn more about our blockchain offerings?</h2>
		</div>
		<div class="col-md-4 text-md-right py-4">
			<a href="contact" class="btn btn-outline-primary btn-lg">Contact us</a>
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

<!-- Mirrored from blockcypherminings.com/blockchain by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 12:08:35 GMT -->
</html>