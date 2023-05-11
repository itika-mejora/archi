<?php
/*
    Template name: Thank You page
*/
get_header();
?>
<section class="hero-section">
	
	<div class="hero-content parallax-container padding-xlarge" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-banner1.jpg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<h1 class="page-title">Thank You!</h1>
					<div class="breadcrumbs">
						<span class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home /</a></span>
						<span class="item colored">Thank you</span>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="contact-information padding-large mt-3">
	<div class="container">
		<div class="row">
				<div class="col-md-6 p-0 mb-3">
					<div class="container">
					<h2>Get in Touch</h2>

				<div class="contact-detail d-flex flex-wrap mt-4">
					<div class="detail mr-6 mb-4">
						<h3>Phones</h3>
						<ul class="list-unstyled">
							<li><i class="icon icon-phone"></i>+1650-243-00023</li>
							<li><i class="icon icon-phone"></i>+1650-243-00021</li>
						</ul>
					</div><!--detail-->
					<div class="detail mb-4">
						<h3>Emails</h3>
						<ul class="list-unstyled">
							<li>
								<i class="icon icon-envelope-o"></i>
								<a href="mailto:info@yourcompany.com">info@yourcompany.com</a>
							</li>
						</ul>
					</div><!--detail-->
					<div class="address detail mb-4">
						<h3>Address</h3>
						<ul class="list-unstyled">
							<li>
								<i class="icon icon-map-marker"></i>
								<span>North Melbourne VIC 3051, Australia</span>
							</li>
						</ul>
					</div><!--detail-->		
								
					<div class="detail mb-4">
						<h3>Social Links</h3>
						<div class="social-links flex-container">
							<a href="#" class="icon icon-facebook"></a>
							<a href="#" class="icon icon-twitter"></a>
							<a href="#" class="icon icon-pinterest-p"></a>
							<a href="#" class="icon icon-youtube"></a>
							<a href="#" class="icon icon-linkedin"></a>
						</div><!--social-links-->
					</div><!--detail-->

				</div><!--contact-detail-->
				</div>
			</div><!--col-md-6-->

			<div class="col-md-6 p-0">
				<div class="container">
					<div class="row">
						<div class="contact-information col-md-12">
						<h2>Thank you</h2>
						<p>We will get back to you as soon as possible.</p>
						</div><!--contact-information-->
					</div>
				</div>
			</div><!--col-md-6-->

		</div>
	</div>
</section>


<?php get_footer(); ?>