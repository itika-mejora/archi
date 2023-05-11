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
						<span class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home /</a></span>
						<span class="item">Our Blog</span>
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
						$wp_query = new WP_Query( array(
							'post_type' => 'post',
							'posts_per_page' => 6,
						));
						if ($wp_query->have_posts()) :
						?>
						<?php
						while ($wp_query->have_posts()) : $wp_query->the_post();
						
						?>
						
						<div class="col-md-4">
							
							<article class="post-item">

								<figure>
									<a href="<?php the_permalink(); ?>" class="image-hvr-effect">
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
						<?php endwhile; endif; wp_reset_query();?>	

						

					</div>
				</div>
				<!-- / post grid -->

			</div>

		</div>
		
		

		


	</div>
</section>



<?php get_footer(); ?>