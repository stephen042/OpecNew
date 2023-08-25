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
<div class="hero-cover" style="background-image: url(assets/images/bg-banner-ai.png); color: #fff">
	<div class="container">
		<div class="hero-cover-container text-center" style="margin: auto;">
			<h1>Artificial Intelligence</h1>
			<p>We are working to make the world more<br />trusted and intelligent.</p>
		</div>
	</div>
</div>
<section class="py-5 preview-slider">
	<div class="container">
		<h5 class="text-black-50 font-weight-bold mb-5">About Artificial Intelligence</h5>
		<h2 class="font-weight-bold">Artificial intelligence will remake the world as we know it. According to Cisco, 98% of the world’s data sits unused.
			<div class="text-black-50">Artificial intelligence will help us see the patterns in this data and apply them to security, medicine, business, government, supply chain, and more.</div>
		</h2>
	</div>
</section>
<section class="py-5 preview-slider bg-light">
	<div class="container">
		<h1 class="font-weight-bold" style="font-size: 42px;">Our Solutions</h1>
		<div class="row my-5">
			<div class="col-md-6 py-3">
				<p>Our AI solutions integrate our world-class hardware and software technologies for edge and cloud-to-edge enterprise solutions. BlockCypherMinings’s artificial intelligence products help any organization adopt artificial intelligence at scale.</p>
			</div>
			<div class="col-md-6 py-3">
				<p>We offer foundational core AI products and integrated AI computing systems, as well as full-service AI/blockchain enterprise solutions for corporations and governments. </p>
			</div>
		</div>
		<img src="{{ asset('assets/images/bg-solutions.png') }}" alt="">
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-md-8 py-4">
			<h2 class="m-0 abel">Want to learn more about AI?</h2>
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

<!-- Mirrored from blockcypherminings.com/ai by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 12:08:41 GMT -->
</html>