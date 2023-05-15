<?php
/*
    Template name: Portfolio page
*/
get_header(); ?>

<section class="hero-section jarallax">
   <div class="jarallax-img">
        <?php the_post_thumbnail(); ?>
    </div>
	<div class="hero-content padding-xlarge">
		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<h1 class="page-title"><?php the_title();?></h1>
					<div class="breadcrumbs">
						<span class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home /</a></span>
						<span class="item"><?php the_title();?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- -----------------------------------Portfolio Listing Section----------- -->
<section id="latest-blog" class="scrollspy-section padding-large">
	<div class="container">
        <div class="row">
			<div class="col-md-12">
				<!-- post grid -->
				<div class="post-grid">
					<div class="row">
					    <?php
					        $categories = get_terms('portcategories', array('parent' => 0, 'orderby' => 'id', 'hide_empty' => true));   
					        foreach ($categories as $term) {
						    $wp_query = new WP_Query( array(
							'post_type' => 'portfolio',
							'posts_per_page' => -1,
						    ));
						    if ($wp_query->have_posts()) :			//The query			
						    while ($wp_query->have_posts()) : $wp_query->the_post();	//start Loop				
						?>						
						<div class="col-md-4">							
							<article class="post-item">
								<div class="post-content">	
									<div class="meta-date"><?php the_time( 'F j.Y' ); ?></div>			
								    <h3 class="post-title"><a href="<?php the_permalink(); ?>">Category:<?php echo $term->name;?></a></h3>
								    <?php the_post_thumbnail(); ?>
								</div>
							</article>
						</div>
						<?php endwhile; endif; wp_reset_query();	// end Of Loop
						 }?>						
					</div>
				</div>
				<!-- / post grid -->
			</div>
		</div>
	</div>
</section>
<!-- ------------------------------------------End of Listing--------------------- -->

<?php get_footer(); ?>