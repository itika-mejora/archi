<?php
/* this is Post detail */

get_header();
?>
<section class="hero-section jarallax">
	
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main-banner1.jpg" class="jarallax-img">
	<div class="hero-content padding-xlarge">
		<div class="container">
			<div class="row">
				<div class="col-md-12">			
					<h1 class="page-title"><?php the_title();?></h1>
					<div class="breadcrumbs">
						<span class="item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home /</a></span>
						<span class="item">Construction Tips</span>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<section class="padding-large">
	<div class="container">
		<div class="row">

			<div class="col-md-12">

				<div class="post-content">
					<?php the_content();?>
					
				</div><!--post-content-->

			</div>

		</div>

		<div class="row">
			<div class="col-md-12">
				
				<section class="comments-wrap mb-4">
					<h3>Comments</h3>
					<div class="comment-list mt-4">
						

						<article class="flex-container d-flex mb-3">
							
							<div class="author-post">
								<!--meta-tags-->

								<?php comments_template();?>
							</div>

						</article><!--flex-container-->

						
					</div><!--comment-list-->

				</section>

				

			</div>
		</div>

	</div>
</section>
<?php get_footer(); ?>