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
<div class="hero-cover" style="background-image: url(assets/images/hardware_d.jpg); color: #fff">
	<div class="container">
		<div class="hero-cover-container">
			<h1>High Performance Computing Solutions</h1>
			<p>BlockCypherMinings’s state-of-the-art hardware products are designed especially for high-performance computing needs, providing unparalleled efficiency and productivity to a variety of sectors. All of our products can be used for highly complex and compute-intensive tasks within existing high-performance computing infrastructure.</p>
		</div>
	</div>
</div>
<section class="py-5 preview-slider">
	<div class="container">
		<div class="row px-md-5 my-5">
			<div class="col-md-6 px-5">
				<img src="{{ asset('assets/images/immersion_cooling_main.jpg') }}">
			</div>
			<div class="col-md-6 pt-md-4">
				<h2>Immersion Cooling</h2>
				<p>Data centers are increasingly used for everything from research over complex commercial computations and AI to securing the Bitcoin Blockchain. We partner with best-in-class immersion cooling innovator LiquidStack to make every data center and other high-performance computing application we work in, as energy and space efficient, sustainable and productive as possible.</p>
			</div>
		</div>
	</div>
</section>
<section class="bg-light py-5 preview-slider">
	<div class="container">
		<div class="row px-md-5 my-5">
			<div class="col-md-6 pt-md-4">
				<h2>DataTank Container</h2>
				<p>Our DataTank container uses LiquidStack’s immersion cooling technology for cost-effective, energy-efficient and rapid cluster computing deployment. This containerized solution is our 3rd generation system and guarantees high-computing efficiency and operation in any climate conditions. Its “plug and play” turnkey design has the highest power density and lowest build cost per kW of any product on the market.</p>
			</div>
			<div class="col-md-6 px-5">
				<img src="{{ asset('assets/images/industries_datatank_modular_key_features-700x514.png') }}">
			</div>
		</div>
	</div>
</section>
<section class="py-5 preview-slider">
	<div class="container">
		<div class="row px-md-5 my-5">
			<div class="col-md-6 px-5">
				<img src="{{ asset('assets/images/box_2_white.jpg') }}">
			</div>
			<div class="col-md-6 pt-md-4">
				<h2>BlockBox AC Data center</h2>
				<p>BlockCypherMinings’s BlockBox AC data center is a fully featured containerized HPC solution that can be easily placed in nearly any location for optimized OPEX, performance and deployment. This is one of the most powerful and cost-effective bitcoin mining solutions available on the market, enabling bitcoin transaction processing at scale with peak efficiency and power.</p>
			</div>
		</div>
	</div>
</section>
<div class="border-top">
	<div class="container">
		<div class="row">
			<div class="col-md-8 py-4">
				<h2 class="m-0 abel">Want to learn more about our solutions for HPC?</h2>
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

<!-- Mirrored from blockcypherminings.com/hpc by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 12:08:37 GMT -->
</html>