<?php
/**
 * The template for displaying all portfolio posts.
 *
 * 
 */

get_header(); ?>

<section class="hero-section jarallax">
	
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-banner1.jpg" class="jarallax-img">

	<div class="hero-content padding-xlarge">

		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<h1 class="page-title">Our Portfolio</h1>
					<div class="breadcrumbs">
						<span class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home /</a></span>
						<span class="item">Our Portfolio</span>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<section id="latest-blog" class="scrollspy-section padding-large">
	<div class="container">
	
					
		
		<div class="row">
			<div class="col-md-12">
				
				<!-- post grid -->
				<div class="post-grid">
					<div class="row">
					<?php
						
						if ($wp_query->have_posts()) :
						
						while ($wp_query->have_posts()) : $wp_query->the_post();
						$url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
						
						?>
						
						<div class="col-md-4">
							
							<article class="post-item">

								

								<div class="post-content">	
									<div class="meta-date"><?php the_time( 'F j.Y' ); ?></div>			
								    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									
				    	  <a href="<?php echo $url[0];?>" data-lightbox-gallery="gallery1" title="Calm Before The Storm (One Shoe Photography Ltd.)" class="image-link"><?php the_post_thumbnail(); ?></a>
								</div>
							</article>

						</div>
						<?php endwhile; endif; ?>	

						

					</div>
				</div>
				<!-- / post grid -->

			</div>

		</div>
		
		

		


	</div>
</section>



<?php get_footer(); ?>