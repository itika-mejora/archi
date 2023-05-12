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
					<h1 class="page-title"><?php the_title();?></h1>
					<div class="breadcrumbs">
						<span class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home /</a></span>
						<span class="item colored"><?php the_title();?></span>
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
					<h2><?php echo the_field('banner_heading');?></h2>

				<div class="contact-detail d-flex flex-wrap mt-4">
				<?php if(get_field('contact_details') ) { 
                        while(has_sub_field('contact_details') ) { ?>
					<div class="detail mr-6 mb-4">
						<h3><?php echo the_sub_field('contact_name');?></h3>
						<ul class="list-unstyled">
						<?php if(get_sub_field('contact_list') ) { 
                        while(has_sub_field('contact_list') ) { ?>
							<li><i class="<?php echo the_sub_field('contact_class');?>"></i><?php echo the_sub_field('contact_text');?></li>
						<?php } }?>	
						</ul>
					</div>
					<?php } }?><!--detail-->
					

				</div><!--contact-detail-->
				</div>
			</div><!--col-md-6-->

			<div class="col-md-6 p-0">
				<div class="container">
					<div class="row">
						<div class="contact-information col-md-12">
						<h2><?php echo the_field('contact_info_heading');?></h2>
						<p><?php echo the_field('contact_info_subheading');?></p>
						</div><!--contact-information-->
					</div>
				</div>
			</div><!--col-md-6-->

		</div>
	</div>
</section>


<?php get_footer(); ?>