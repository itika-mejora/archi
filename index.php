<?php
/* 
    This is default frontpage / post listing page 
*/

get_header();
?>
<section class="hero-section jarallax">
	
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-banner1.jpg" class="jarallax-img">

	<div class="hero-content padding-xlarge">

		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<h1 class="page-title">Our Blog</h1>
					<div class="breadcrumbs">
						<span class="item"><a href="index.html">Home /</a></span>
						<span class="item">Our Blog</span>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
<?php
$wp_query = new WP_Query( array(
	'post_type' => 'post',
	'posts_per_page' => 3,
));
if ($wp_query->have_posts()) :
?>
<section id="latest-blog" class="scrollspy-section padding-large">
	<div class="container">
					
						<?php
							while ($wp_query->have_posts()) : $wp_query->the_post();
						
						?>
						
		
		<div class="row">
			<div class="col-md-12">
				
				<!-- post grid -->
				<div class="post-grid">
					<div class="row">
						
						<div class="col-md-4">
							
							<article class="post-item">

								<figure>
									<a href="#" class="image-hvr-effect">
										<?php the_post_thumbnail(); ?>"			
									</a>
								</figure>

								<div class="post-content">	
									<div class="meta-date"><?php the_time( 'F j.Y' ); ?></div>			
								    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								    <?php echo get_the_excerpt();?>
								</div>
							</article>

						</div>

						<!-- <div class="col-md-4">

							<article class="post-item">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/postimg2.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-content">	
									<div class="meta-date">Mar 29, 2021</div>			
								    <h3 class="post-title"><a href="#">How to make minimalist living rooms pop-out</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>
						</div>

						<div class="col-md-4">
							<article class="post-item">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/postimg3.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-content">		
									<div class="meta-date">Mar 27, 2021</div>			
								    <h3 class="post-title"><a href="#">how to make your resort that looks outstanding</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>
						</div> -->

					</div>
				</div>
				<!-- / post grid -->

			</div>

		</div>
		<?php endwhile;?>

		<!-- <div class="row">
			<div class="col-md-12">
				
				<div class="post-grid">
					<div class="row">
						
						<div class="col-md-4">
							
							<article class="post-item">

								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/postimg1.jpg" alt="post" class="post-image">			
									</a>
								</figure>

								<div class="post-content">	
									<div class="meta-date">Mar 30, 2021</div>			
								    <h3 class="post-title"><a href="#">modern vibes bedrooms, todays trending design</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>

						</div>

						<div class="col-md-4">

							<article class="post-item">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/postimg2.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-content">	
									<div class="meta-date">Mar 29, 2021</div>			
								    <h3 class="post-title"><a href="#">How to make minimalist living rooms pop-out</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>
						</div>

						<div class="col-md-4">
							<article class="post-item">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/postimg3.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-content">		
									<div class="meta-date">Mar 27, 2021</div>			
								    <h3 class="post-title"><a href="#">how to make your resort that looks outstanding</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>
						</div>

					</div>
				</div>

			</div>

		</div> -->


		<!-- <div class="row">
			<div class="col-md-12">
				
				<div class="post-grid">
					<div class="row">
						
						<div class="col-md-4">
							
							<article class="post-item">

								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/postimg1.jpg" alt="post" class="post-image">			
									</a>
								</figure>

								<div class="post-content">	
									<div class="meta-date">Mar 30, 2021</div>			
								    <h3 class="post-title"><a href="#">modern vibes bedrooms, todays trending design</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>

						</div>

						<div class="col-md-4">

							<article class="post-item">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/postimg2.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-content">	
									<div class="meta-date">Mar 29, 2021</div>			
								    <h3 class="post-title"><a href="#">How to make minimalist living rooms pop-out</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>
						</div>

						<div class="col-md-4">
							<article class="post-item">
								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/postimg3.jpg" alt="post" class="post-image">
									</a>
								</figure>
								<div class="post-content">		
									<div class="meta-date">Mar 27, 2021</div>			
								    <h3 class="post-title"><a href="#">how to make your resort that looks outstanding</a></h3>
								    <p>Lectus molestie id enim ipsum. Netus sed cursus nibh iaculis ipsum turpis nulla blandit dui.</p>
								</div>
							</article>
						</div>

					</div>
				</div>

			</div>

		</div> -->


	</div>
</section>
<?php ;endif;wp_reset_query();?>


<?php get_footer(); ?>